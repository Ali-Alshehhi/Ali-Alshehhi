<?php
session_start();

// Hardcoded username and password for demonstration
$valid_username = "demo";
$valid_password = "password";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful, redirect to index.html with username in URL
        $_SESSION['username'] = $username;
        header("Location: index.html?username=" . urlencode($username));
        exit();
    } else {
        // Authentication failed, redirect back to login.html with error message
        header("Location: login.html?error=1");
        exit();
    }
}
?>
