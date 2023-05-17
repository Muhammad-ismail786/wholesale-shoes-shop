<?php
session_start(); // Starting session
include('connect.php');
// Checking if user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php"); // Redirecting to dashboard page
}

// Handling login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if user exists in database
    $query = "SELECT * FROM userdata WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username; // Setting session variable
        header("Location: dashboard.php"); // Redirecting to dashboard page
    } else {
        $error_msg = "Invalid username or password";
    }
}

// Handling logout functionality
if (isset($_GET['logout'])) {
    session_unset(); // Unsetting session variables
    session_destroy(); // Destroying session
    header("Location: login.php"); // Redirecting to login page
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<?php
	if (isset($error_msg)) {
	    echo "<p>$error_msg</p>";
	}
	?>
	<form method="POST" action="">
		<label>Username:</label>
		<input type="text" name="username" required>
		<label>Password:</label>
		<input type="password" name="password" required>
		<input type="submit" value="Login">
	</form>
</body>
</html>
