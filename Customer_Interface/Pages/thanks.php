<!DOCTYPE html> <!--Declares the document type as HTML5.-->
<html> <!--The opening tag for the HTML document.-->
<head> 
	<style> 
		body { 
			background-color: #f2f2f2; 
			font-family: Arial, sans-serif; } 	
		h1 { 
			color: #008000; 
			font-size: 2.5em; 
			text-align: center; 
			margin-top: 50px; } 	
		p { 
			color: #333; 
			font-size: 1.2em; 
			text-align: center; 
			margin-top: 20px; } 		
	</style> 
</head> 

<?php 
// Initializes a session or resumes the current session.
	session_start(); 
// Retrieve the customer name from the session variable 
	if (isset($_SESSION['user'])) { //Checks if the session variable 'user' is set. This likely indicates that a user is logged in.
		$user = $_SESSION['user']; //If the 'user' session variable is set, it retrieves the user information and assigns it to the variable $user.
		$customerName = $user['name']; //Extracts the 'name' field from the user's data and assigns it to the variable $customerName. This assumes the user's name is stored in the 'name' field.
	} 
	else //If the 'user' session variable is not set (user not logged in), the code inside this block will be executed.
	{ 
		$customerName = "Valued Customer"; //Assigns the default name "Valued Customer" to the variable $customerName for users who are not logged in.
	} 
// Display the thank you message 
	echo "<h1>Thank You, $customerName!</h1>"; //Displays a thank you message with the customer's name (or "Valued Customer" if not logged in)
	echo"<p>Your order has been received and will be delivered soon.</p>"; 
	?> 
</html>
