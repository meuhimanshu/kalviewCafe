<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kalviewcafe";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fullname = trim($_POST['fullname']);
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password = trim($_POST['password']);


$hashed_password = password_hash($password, PASSWORD_BCRYPT);


$sql_check = "SELECT * FROM users WHERE username = ? OR email = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("ss", $username, $email);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {

    header("Location: ../credManager/signup.php?error=exists");
    exit();
}


$sql_insert = "INSERT INTO users (fullname, username, email, phone, password) VALUES (?, ?, ?, ?, ?)";
$stmt_insert = $conn->prepare($sql_insert);
$stmt_insert->bind_param("sssss", $fullname, $username, $email, $phone, $hashed_password);

if ($stmt_insert->execute()) {

    header("Location: ../credManager/login.php?success=registered");
    exit();
} else {

    echo "Error: " . $stmt_insert->error;
}


$stmt_check->close();
$stmt_insert->close();
$conn->close();
?>
