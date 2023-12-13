<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Perform authentication (this is a simplified example)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform actual authentication logic (you should do this securely)
    if ($username === "demo" && $password === "demo123") {
        // Set a session variable to mark the user as logged in
        $_SESSION["username"] = $username;
        
        // Redirect to the dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password. Please try again.";
    }
} else {
    // Redirect back to the login page if accessed directly
    header("Location: login.html");
    exit();
}
?>
