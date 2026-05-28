<?php // Start of PHP code

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if the HTTP request method is POST (typically used for form submissions).
	// Retrieve the username and password from the form's POST data.
	$username = $_POST["username"]; 
	$password = $_POST["password"]; 

	// Database connection details 
	$host = "localhost"; 
	$dbname = "shp"; 
	$username_db = "root"; 
	$password_db = ""; 

	try {  // Try to establish a database connection using PDO
		$db = new PDO( 
			"mysql:host=$host;dbname=$dbname", 
			$username_db, 
			$password_db
		); 
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set PDO to throw exceptions on errors.

		// Check if the user exists in the database 
		$stmt = $db->prepare("SELECT * FROM users WHERE username = :username"); 
		$stmt->bindParam(":username", $username); 
		$stmt->execute(); 
		$user = $stmt->fetch(PDO::FETCH_ASSOC); // Query the database to fetch user information by username.

		if ($user) { // If the user exists in the database

			// Verify the provided password against the hashed password in the database.
			if (password_verify($password, $user["password"])) 
			{ 
				session_start(); 
				$_SESSION["user"] = $user; // Start a session and store user data in the session.

				 // Display a JavaScript alert and redirect the user upon successful login.
				echo '<script type="text/javascript"> window.onload = function () 
				{ 
					alert("Welcome to Mondotoil Online Marketing"); 
					window.location.href = "../product.php"; 
					}; 
				</script>'; 

			} 
			else // Display an error message if the password is incorrect.
			{ 
				echo "<h2>Login Failed</h2>"; 
				echo "Invalid email or password."; 
			} 
		} 
		else // Display an error message if the user doesn't exist.
		{ 
			echo "<h2>Login Failed</h2>"; 
			echo "User doesn't exist"; 
		} 
	} catch (PDOException $e) { // Display an error message if there is a database connection issue.
		echo "Connection failed: " . $e->getMessage(); 
	} 
} 
?>
