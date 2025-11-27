<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Leave blank for XAMPP
$dbname = "kalviewcafe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Check if username exists
$sql_check = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
        // Set a cookie for user session (valid for 1 day)
        setcookie("user", $user['username'], time() + (86400), "/"); // Cookie valid for 1 day

        // Redirect to the homepage or dashboard
        header("Location: ../dashboard/user_dash.php");
        exit();
    } else {
        // Invalid password
        header("Location: ../credManager/login.php?error=invalid_password");
        exit();
    }
} else {
    // Username not found
    header("Location: ../credManager/login.php?error=user_not_found");
    exit();
}

$stmt->close();
$conn->close();
?>
