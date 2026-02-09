<?php
session_start();

/* Database connection */
$conn = mysqli_connect("localhost", "root", "", "phpdb");

if (!$conn) {
    die("Database connection failed");
}

/* Get form data */
$username1 = $_POST['username1'];
$password1 = $_POST['password1'];

/* Fetch user */
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username1);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

/* Verify login */
if ($row = mysqli_fetch_assoc($result)) {
    if (password_verify($password1, $row['password1'])) {
        $_SESSION['username1'] = $row['username1'];
        echo "Login successful";
        // header("Location: dashboard.php");
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}
?>

