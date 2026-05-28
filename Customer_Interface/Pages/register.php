<?php
// Check if the request method is POST, indicating that a form has been submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
	$name = $_POST["name"]; 
	$username = $_POST["username"]; 
	$email = $_POST["email"]; 
	$password = $_POST["password"]; 
	
	// Hash the user's password for secure storage in the database.
	$hashed_password = password_hash($password, PASSWORD_BCRYPT); 
	// Define database connection parameters.
	$host = "localhost"; 
	$dbname = "shp"; 
	$username_db = "root"; 
	$password_db = ""; 
	
	try { 
		$db = new PDO( // Establish a connection to the database.
		"mysql:host=$host;dbname=$dbname", 
			$username_db, $password_db); 
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		
		// Insert the user into the database 
		$stmt = $db->prepare( 
		"INSERT INTO users (name,username,email, password) 
			VALUES (:name, :username, :email,:password)"); 
		$stmt->bindParam(":name", $name); 
		$stmt->bindParam(":username", $username); 
		$stmt->bindParam(":email", $email); 
		$stmt->bindParam(":password", $hashed_password); 
		$stmt->execute();

		// Display a registration success message and redirect to the login page.
		echo "<h2>Registration Successful</h2>"; 
		echo "Thank you for registering, " . $name . "!<br>"; 
		echo "You'll be redirected to login page in 3 seconds"; 
		header("refresh:3;url=login.html"); 
	} 
	catch(PDOException $e) 
	{ // Handle any connection or database-related errors.
		echo "Connection failed: " . $e->getMessage(); 
	} 
} 
?>
