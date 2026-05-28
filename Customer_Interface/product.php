<!DOCTYPE html> <!--This line declares the document type and version of HTML used in the document.-->
<html lang="en"><!--This line marks the beginning of the HTML document and specifies the language as English.-->
<head> 
	<title>Products</title> 
	<meta charset="UTF-8"><meta name="viewport" content="width=device, inital-scale=1.0"><!--This line specifies the character encoding for the document as UTF-8, which is a widely used character encoding for web content.-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!--This line links an external CSS file from a Content Delivery Network (CDN) that provides Font Awesome icons.-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                                    

	<link href="style.css" type="text/css" rel="stylesheet" /> <!--Links the product page to the external style sheet "Style.css"-->

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
		text-align: center;
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
		color: white; 
		font-size: 25px; 
		margin-bottom: 10px; 
		background-color: #1f2833; 
		color: #ffffff; 
		padding: 20px; 
		text-align: center;
	} 
	
	h2 { 
		color: #1f2833; 
		font-size: 24px; 
		margin-bottom: 10px; 
		align-items: center;
		display: flex;
	} 

	table { 
		border-collapse: collapse; 
		width: 100%; 
	} 
	th, td { 
		text-align: left; 
		padding: 8px; 
	} 
	th { 
		background-color: #dddddd; 
	} 
	tr:nth-child(even) { 
		background-color: #f2f2f2; 
	} 
	footer { 
		background-color: #1f2833; 
		color: #ffffff; 
		padding: 20px; 
		text-align: center; 
	} 
</style> 

<body> 
<h1>
<?php  //start of PHP code
	session_start(); // This line initiates a PHP session or resumes the existing session.
	require_once("config.php");//This line includes or requires the "config.php" file, which likely contains configuration settings or functions necessary for the script to work correctly.
	$user = $_SESSION['user']; //This line retrieves the value associated with the 'user' key from the session data and assigns it to the variable $user. This assumes that the 'user' data has been previously stored in the session.
	echo $user['name']; //This line outputs the 'name' property from the data stored in the $user variable. It is likely displaying a personalized welcome message with the user's name.
?> 
Welcome <br>Please choose any items you want and add them to your cart</h1> <!--This line will display the welcome message-->
	

<!--Header Section starts=============================-->
	<!--The header section will display the links at the nevigation part of the website -->
	<header> 
		<nav> 
			<ul> <!--The links are listed within the li tag-->
				<li> 
					<a href="./Home.html">Home</a> 
				</li> 
				<li> 
					<a href="./product.php">Products</a> 
				</li> 
				<li> 
					<a href="./Pages/contact.php">Contact</a> 
				</li> 
			</ul> 
		</nav> 
	</header> 
<!--Header Section ends====== =========================-->

<?php //start of PHP code
//code for Cart
if(!empty($_GET["action"])) //This conditional checks if the URL contains a parameter named "action," and if that parameter is not empty. This parameter is likely used to determine the action to be performed on the cart.
{ 

// It starts a switch statement based on the value of the "action" parameter. Depending on the value, different actions will be executed.
switch($_GET["action"]) 
{
	//code for adding product in cart
	//the case labeled "add." inside the switch statement This case handles the action of adding a product to the cart.
	case "add": 
		if(!empty($_POST["quantity"])) //This checks if the quantity of the product being added is not empty. In most shopping cart systems, you need to specify a quantity when adding an item to the cart.
		{
			$pid=$_GET["pid"]; //This line retrieves the product ID (likely from the URL's "pid" parameter) and assigns it to the variable $pid.
			$result=mysqli_query($con,"SELECT * FROM tblproduct WHERE id='$pid'"); //This line queries a database (referred to as $con) to retrieve information about the product with the given ID. It's selecting product data from a table named "tblproduct."
	          while($productByCode=mysqli_fetch_array($result)) //This initiates a loop that fetches each row of product data from the database result set. It's common to loop through the results when querying a database.
			  { 
				$itemArray = array($productByCode["code"]=>array
				( 
				 // Create an associative array to represent the product being added to the cart.
					'name'=>$productByCode["name"], 
					'code'=>$productByCode["code"], 
					'quantity'=>$_POST["quantity"], 
					'price'=>$productByCode["price"], 
					'image'=>$productByCode["image"]));

				if(!empty($_SESSION["cart_item"])) // Check if the shopping cart stored in the session is not empty.
			 	{
					// Check if the product code already exists in the cart.
					if(in_array($productByCode["code"],array_keys($_SESSION["cart_item"]))) 
					{   
						
						foreach($_SESSION["cart_item"] as $k => $v) 
						{
							if($productByCode["code"] == $k) 
							{
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
						}
					} 
					else // Update the quantity of the existing product in the cart.
					{
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
					}
			 	}  
			 else // Add the product to the cart or update the quantity in the cart.
			 {
				$_SESSION["cart_item"] = $itemArray;
			 }
		}
	}
	    break; //The code breaks out of the "add" case.
    }
    }
 ?> 

<div id="product-grid"> <!-- This div is used as a container for displaying a list of products. -->
	<div class="txt-heading">Products</div><!-- Display a heading for the list of products with the class "txt-heading." -->

	<?php //start of the php code
	$product= mysqli_query($con,"SELECT * FROM tblproduct ORDER BY id ASC"); // Query the database to retrieve a list of products from the "tblproduct" table and order them by ID in ascending order.
	if (!empty($product)) { // Check if there are products in the result.
		while ($row=mysqli_fetch_array($product)) { // Loop through each product in the result set.
		
	?>
		<div class="product-item"> <!-- This div represents an individual product item. -->
			<form method="post" action="index.php?action=add&pid=<?php echo $row["id"]; ?>"> <!-- A form for adding a product to the cart. The action includes the product ID. -->
			<!-- Display the product image with the specified dimensions. -->
			<div class="product-image">
				<img src="<?php echo $row["image"] ;?>" height="120rem" width="50%">
			</div>
			
			<!-- This div contains the product title, price, and cart action. -->
			<div class="product-tile-footer"> 
				<div class="product-title"><?php echo $row["name"]; ?></div>
				<div class="product-price"><?php echo "K".$row["price"]; ?></div> <!-- Display the product price with a Kina sign. -->
				<div class="cart-action">
					<input type="text" class="product-quantity" name="quantity" value="1" size="2" /> <!-- Input field for specifying the quantity. Default value is 1. -->
					<input type="submit" value="Add to Cart" class="btnAddAction" /><!-- Submit button to add the product to the cart. -->
				</div>
			</div>
			</form>
		</div>	
	<?php
		}
	}  
	else 
	{
 		echo "No Records."; // If there are no products in the database, display "No Records."
	}
	?>
</div>

<!---->
	

</BODY>
</HTML>
