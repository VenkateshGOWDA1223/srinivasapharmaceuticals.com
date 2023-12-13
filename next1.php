// Validate the credentials (you should perform more secure validation)
if ($username === "demo" && $password === "demo123") {
    echo "Login successful! Welcome, $username!";
} else {
    echo "Invalid username or password. Please try again.";
}
} else {
// Redirect back to the login page if accessed directly
header("Location: login.html");
exit();
}
?>