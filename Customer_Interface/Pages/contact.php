
<!DOCTYPE html>
<html>

<head> 
	<title>Contact Us</title> 
	<link rel="stylesheet" href="./main.css" type="text/css" media="screen">
	<link rel="stylesheet" href="./main.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head> 
<style> 
	body { 
		background-color: #ffffff; 
		font-family: Arial, sans-serif; 
	} 
	
	header { 
		background-color: #1f2833; 
		color: #ffffff; 
		padding: 20px; 
	} 
	
	nav ul { 
		margin: 0; 
		padding: 0; 
		list-style: none; 
	} 
	
	nav li { 
		display: inline-block; 
		margin-right: 20px; 
	} 
	
	nav a { 
		color: #ffffff; 
		text-decoration: none; 
	} 
	
	nav a:hover { 
		text-decoration: underline; 
		color:rgba(255, 170, 11, 0.785);
	} 
	
	section { 
		max-width: 600px; 
		margin: 0 auto; 
		padding: 20px; 
	} 
	
	h1 { 
		color: #1f2833; 
		font-size: 32px; 
		margin-bottom: 20px; 
	} 
	
	h2 { 
		color: #1f2833; 
		font-size: 24px; 
		margin-bottom: 10px; 
	} 
	
	label { 
		display: block; 
		margin-bottom: 5px; 
		color: #666666; 
	} 
	
	input[type="text"], 
	input[type="email"] { 
		width: 100%; 
		padding: 10px; 
		border: 1px solid #cccccc; 
		border-radius: 5px ; 
		margin-bottom: 10px; 
		font-size: 16px; 
		color: ;
	} 
	
	input[type="submit"] { 
		background-color: #1f2833; 
		color: #ffffff; 
		padding: 10px 20px; 
		border: none; 
		border-radius: 5px; 
		font-size: 16px; 
		cursor: pointer; 
	} 
	
	input[type="submit"]:hover { 
		background-color: rgba(255, 170, 11, 0.785); 
	} 
	
	footer { 
		background-color: #1f2833; 
		color: #ffffff; 
		padding: 20px; 
		text-align: center; 
	} 
    .fa 
{  
  padding: 20px;  
text-align: center;  
  margin: 5px 2px;  
  font-size: 30px;  
  width: 50px;  
}
  .fa-twitter 
  {  
    background: #55ACEE;  
    color: white;  
  }  
   
  .fa-linkedin {  
    background: #007bb5;  
    color: white;  
  }  
  .fa-instagram {  
    background: #eb4a51;  
    color: white;  
  }  
  .fa-youtube {  
    background: #bb0000;  
    color: white;  
  }  
  
  
  .fa:hover {  
      opacity: 0.9;  
  }  
	
</style> 

<body> 
	<header> 
		<nav> 
			<ul> 
				<li> 
					<a href="../Home.html">Home</a> 
				</li> 
				<li> 
					<a href="../product.php">Products</a> 
				</li> 
				<li> 
					<a href="../index.php">Cart</a>
				</li> 
			</ul> 
		</nav> 
	</header> 



    <section class="product" id="product">
    <h1> Don't hesitate to contact us </h1>
    <div class="box-container"> 
    <div class="box">
        <div class="content">
            <h3></i></h3>
            <p><br>
            <ul>               
              <a href="https://twitter.com/DelilahTumbo" class="fa fa-twitter"></a>  
                            
              <a href="https://www.linkedin.com/in/delilah-tumbo-755158220/" class="fa fa-linkedin"></a>   
              </ul>
               
            </p> 

        </div>
    </div>

    </div>
</section>

<section class="product" id="product">
<h2></h2>
    <div class="box-container"> 

    <div class="box">
        <div class="content">
            <h3>Send e-mail to thelmatumbo@gmail.com:</i></h3>
            <p>


<form action="contact.php" method="POST">
<div>
  <input type="email" placeholder="email@example.com" name="email" required />
</div>
<div>
  <input type="text" placeholder="Subject" name="subject" required />
</div>
<div>
  <textarea placeholder="Your message" name="body" required></textarea>
</div>
<div>
  <button type="submit">Send a message</button>
</div>
</form>
<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
$subject = "New contact request: $_POST[subject]";
$message = $_POST['body'];
$headers = 'From: info@website.com' . "\r\n" .
           'Reply-To: ' . $_POST['email']. "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail('thelmatumbo@gmail.com', $subject, $message, $headers);

die('Thank you for your email');
}
?>
            </p> 

        </div>
    </div>

    </div>
</section>




</body>
</html>