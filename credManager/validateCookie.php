<?php
// Check if the 'user' cookie is set
if (!isset($_COOKIE['user'])) {
    // Redirect to login page if the cookie is not set
    header("Location: ../credManager/login.php");
    exit();
}

// Retrieve the username from the cookie
$username = $_COOKIE['user'];

// Database connection
$servername = "localhost";
$db_username = "root";
$db_password = ""; // Leave empty for XAMPP
$dbname = "kalviewcafe";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate the user exists in the database
$sql_check_user = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql_check_user);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    // If user does not exist, invalidate the cookie and redirect to login
    setcookie("user", "", time() - 3600, "/"); // Expire the cookie
    header("Location: ../credManager/login.php");
    exit();
}

// Close the database connection
$stmt->close();
$conn->close();

// If everything is valid, continue with the page
?>
