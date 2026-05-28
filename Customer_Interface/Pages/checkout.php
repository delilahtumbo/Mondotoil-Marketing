<!DOCTYPE html> 
<html> 

<head> 
	<title>Checkout Page</title> 
	<link rel="stylesheet" type="text/css" href="checkout.css"> 
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
					<a href="./contact.php">Contact</a> 				
				</li> 
				<li> 
					<a href="../index.php"><i class="fa fa-shopping-cart" style="font-size:30px;color:rgb(212, 155, 31)"></i></a>
				</li> 
			</ul> 
		</nav> 
	</header> 

	<section> 
		<h1>Checkout</h1> 
		<form action="thanks.php" method="post"> 
			<h2>Billing Information</h2> 
			<label for="name">Name:</label> 
			<input type="text"
				id="name"
				name="name" required> 

			<label for="email">Email:</label> 
			<input type="email"
				id="email"
				name="email" required> 

			<label for="address">Address:</label> 
			<input type="text"
				id="address"
				name="address" required> 

			<label for="city">City:</label> 
			<input type="text"
				id="city"
				name="city" required> 

			<label for="state">State:</label> 
			<input type="text"
				id="state"
				name="state" required> 

			<label for="zip">Zip Code:</label> 
			<input type="text"
				id="zip"
				name="zip" required> 

			<h2>Payment Information</h2> 
			<label for="cardholder">Name on Card:</label> 
			<input type="text" id="cardholder"
				name="cardholder" required> 

			<label for="cardnumber">Card Number:</label> 
			<input type="text"
				id="cardnumber"
				name="cardnumber" required 
				pattern="\d{4}-?\d{4}-?\d{4}-?\d{4}" required=> 


			<label for="expmonth">Expiration Month:</label> 
			<input type="text"
				id="expmonth"
				name="expmonth" required> 

			<label for="expyear">Expiration Year:</label> 
			<input type="text"
				id="expyear"
				name="expyear" required> 

			<label for="cvv">CVV:</label> 
			<input type="text"
				id="cvv"
				name="cvv" required> 

			<input type="submit"
				value="Place Order"> 
		</form> 
	</section> 
</body> 

</html>
