<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Perform user registration (this is a simplified example)
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Perform actual registration logic (you should do this securely)
    if ($password === $confirmPassword) {
        // Store user information (you should save this to a database)
        
        // Redirect to the login page after successful registration
        header("Location: login.html");
        exit();
    } else {
        echo "Passwords do not match. Please try again.";
    }
} else {
    // Redirect back to the signup page if accessed directly
    header("Location: signup.html");
    exit();
}
?>
