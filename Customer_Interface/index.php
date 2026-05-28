<!DOCTYPE html> <!--This line declares the document type and version of HTML used in the document.-->
<html lang="en"><!--This line marks the beginning of the HTML document and specifies the language as English.-->

<head> 
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
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
	form input
	{
	
	font-size: bold;
    height: 2rem;
    display: inline-block;
    margin-top: 1rem;
	background-color: #1f2833;
    padding: .2rem 2rem;
    cursor: pointer;
    font-size: 1rem;
	color: white;
	
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
Welcome <br>Please choose any items you want and add them to your cart
</H1>

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


<?php
//code for Cart
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	//code for adding product in cart
	case "add":
		if(!empty($_POST["quantity"])) {
			$pid=$_GET["pid"];
			$result=mysqli_query($con,"SELECT * FROM tblproduct WHERE id='$pid'");
	          while($productByCode=mysqli_fetch_array($result)){
			$itemArray = array($productByCode["code"]=>array('name'=>$productByCode["name"], 'code'=>$productByCode["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			}  else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	}
	break;

	// code for removing product from cart
	case "remove":
		if(!empty($_SESSION["cart_item"])) { // Check if the cart is not empty
			foreach($_SESSION["cart_item"] as $k => $v) { // Iterate through the cart items
					if($_GET["code"] == $k) // Check if the product code matches the code specified in the URL
						unset($_SESSION["cart_item"][$k]); // Unset (remove) the product from the cart			
					if(empty($_SESSION["cart_item"])) // If the cart is empty after removal, unset it
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	// code for if cart is empty
	case "empty": // Action: Empty the cart
		unset($_SESSION["cart_item"]); // Unset (remove) the entire cart from the session
	break;	
}
}
?>



<!-- Cart=================================================================== ---->
<div id="shopping-cart">
<div class="txt-heading" text-align="center">Shopping Cart</div>
<!-- Link to empty the cart, performs an action when clicked -->
<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
<?php
// Check if the "cart_item" session variable exists
if(isset($_SESSION["cart_item"])){// Initialize variables to keep track of total quantity and total price
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
	<!-- Create a table for displaying cart items -->
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php	
// Loop through cart items stored in the session	
    foreach ($_SESSION["cart_item"] as $item){
        // Calculate the price for the specific item
		$item_price = $item["quantity"]*$item["price"];
		?>
				<tr><!-- Display item details: image, name, code, quantity, price -->
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "K ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "K ". number_format($item_price,2); ?></td>
				<td style="text-align:center;">
				<!-- Link to remove the item from the cart, performs an action when clicked -->
					<a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">
					<img src="icon-delete.png" alt="Remove Item" /></a>
				</td>
				</tr>
				<?php // Update the total quantity and total price
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr><!-- Display the total quantity and total price of items in the cart -->
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "K ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
  // End of the cart item display
} else 
	{
?>
<!-- Displayed when the cart is empty -->
		<div class="no-records">Your Cart is Empty</div>
		<?php 
	}		
?>
</div>
<!-- Form for the checkout action -->
	<form action="./Pages/checkout.php" method="post"> <!-- Form for the checkout action -->
	<!-- Submit button to proceed to the checkout -->		
	<input type="submit" value="Checkout" class="button" /> 
		</form> 

</BODY>
</HTML>