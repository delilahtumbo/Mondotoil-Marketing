<?php //Opening PHP tag to begin the PHP code.
$con=mysqli_connect("localhost", "root","", "test"); // Create a database connection to a MySQL database on the local server.
if(mysqli_connect_errno()){ // Check if the connection was successful.
echo "Connection Fail".mysqli_connect_error(); // If there is a connection error, display an error message.
}

?>
