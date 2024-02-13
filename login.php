<?php
session_start();
include 'dbconfig.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Check if the submitted username and password match an agent record in the database
	$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// Authentication succeeded
		$row = $result->fetch_assoc();
		$_SESSION['agent_id'] = $row['id'];
		header('Location: view.php');
		exit();
	} else {
		// Authentication failed
		$error = "Invalid username or password";
		echo '<script>alert("Invalid username or password");</script>';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Agent Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
</head>
<body>
    <header>
		<div class="logo">
			<img src="images/logo.png">
		</div>
		<nav>
			<ul>
                <li><a href="home.html">Home</a></li>
				<li><a href="aboutus.html">About Us</a></li>
				<li><a href="package.html">Tour Packages</a></li>
				<li><a href="WebTravel.html">Booking</a></li>
				<li><a href="gallery.html">Galleria</a></li>
        <li><a href="review.html">Reviews</a></li>
        <li><a href="login.html">Agent Log in</a></li>

			</ul>
		</nav>
		
	</header>
    <main>
        <center>
            <h1>Agent Login</h1>
            <form action="login.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                <br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <br><br>
                <input type="submit" onclick="return validatelogin()" id="login" value="Login">
            </form>
        </center>
        
    </main>
	
</body>
</html>

