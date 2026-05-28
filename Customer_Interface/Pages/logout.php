<?php 
session_start(); // Initializes a session or resumes the current session. 

// Destroy all sessions 
session_destroy(); 

// Redirect to login page 
header("Location: login.html"); //Sends an HTTP header to the browser, instructing it to redirect to the specified URL, which is "login.html". This is used to redirect the user to the login page after destroying the session.
exit; //mmediately terminates the script, preventing any further code execution. It's often used after a redirect to ensure that no additional code is processed after the redirection
?>
