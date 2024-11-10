<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <title>Responsive Shopping Cart design</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="style.css" rel="stylesheet">
</head>
<body>
    <?php

// Implement a function to remove an item from the cart
function removeFromCart($productId) {
    // Start the session if it's not already started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if the cart data is available in the session
    if (isset($_SESSION['addcart'])) {
        $cartItems = &$_SESSION['addcart'];

        // Find the cart item with the specified product ID
        $index = array_search($productId, array_column($cartItems, 'id'));
        if ($index !== false) {
            // Remove the item from the cart
            unset($cartItems[$index]);

            // Update the total amount
            $totalAmount = calculateTotalAmount($cartItems);

            // Update the session variable
            $_SESSION['addcart'] = $cartItems;

            // Return a success message
            return "Product with ID $productId removed from cart.";
        } else {
            // Return an error message
            return "Product with ID $productId not found in cart.";
        }
    } else {
        // Cart is empty, so no item to remove
        return "Cart is empty. Cannot remove product.";
    }
}

// Calculate the total amount of all items in the cart
function calculateTotalAmount($cartItems) {
    $totalAmount = 0;
    foreach ($cartItems as $cartItem) {
        $totalAmount += $cartItem['price'] * $cartItem['quantity'];
    }
    return $totalAmount;
}

// Start the session if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the cart data is available in the session
if (isset($_SESSION['addcart'])) {
    $totalAmount = calculateTotalAmount($_SESSION['addcart']);
    $cart_items = $_SESSION['addcart'];

    // Handle form submission to remove an item
    if (isset($_POST['remove_from_cart'])) {
        $productIdToRemove = $_POST['product_id_to_remove'];
        $removeFromCartResult = removeFromCart($productIdToRemove);
        echo "<p>$removeFromCartResult</p>";
    }

    // Check if the total amount is 0
    if ($totalAmount == 0) {
        // Display "Empty" only
        echo "Empty";
    } else {
        // Display the cart table
        ?>
        <?php foreach ($cart_items as $cart_item): ?>
    <div class="wrapper">
		<h1>Shopping Cart</h1>
		<div class="project">
			<div class="shop">
                <?php include 'config.php';
                 $p_id=$cart_item['id']; 
                 $sql="SELECT * FROM categories where p_id='$p_id'";
                 $run=mysqli_query($connect,$sql);
                    if(mysqli_num_rows($run)){
                        while($show=mysqli_fetch_array($run)){?>
				<div class="box">
					<img src="1.jpg">
					<div class="content">
						<h3>Women Lipsticks</h3>
						<h4>Price: $40</h4>
						<p class="unit">Quantity: <input name="" value="2"></p>
						<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></p>
					</div>
				</div>
				 <?php }}?>
			</div>
			<div class="right-bar">
				<p><span>Subtotal</span> <span>$120</span></p>
				<hr>
				<p><span>Tax (5%)</span> <span>$6</span></p>
				<hr>
				<p><span>Shipping</span> <span>$15</span></p>
				<hr>
				<p><span>Total</span> <span>$141</span></p><a href="#"><i class="fa fa-shopping-cart"></i>Checkout</a>
			</div>
		</div>
	</div>
</body>
</html>


<?php

// Implement a function to remove an item from the cart
function removeFromCart($productId) {
    // Start the session if it's not already started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if the cart data is available in the session
    if (isset($_SESSION['addcart'])) {
        $cartItems = &$_SESSION['addcart'];

        // Find the cart item with the specified product ID
        $index = array_search($productId, array_column($cartItems, 'id'));
        if ($index !== false) {
            // Remove the item from the cart
            unset($cartItems[$index]);

            // Update the total amount
            $totalAmount = calculateTotalAmount($cartItems);

            // Update the session variable
            $_SESSION['addcart'] = $cartItems;

            // Return a success message
            return "Product with ID $productId removed from cart.";
        } else {
            // Return an error message
            return "Product with ID $productId not found in cart.";
        }
    } else {
        // Cart is empty, so no item to remove
        return "Cart is empty. Cannot remove product.";
    }
}

// Calculate the total amount of all items in the cart
function calculateTotalAmount($cartItems) {
    $totalAmount = 0;
    foreach ($cartItems as $cartItem) {
        $totalAmount += $cartItem['price'] * $cartItem['quantity'];
    }
    return $totalAmount;
}

// Start the session if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the cart data is available in the session
if (isset($_SESSION['addcart'])) {
    $totalAmount = calculateTotalAmount($_SESSION['addcart']);
    $cart_items = $_SESSION['addcart'];

    // Handle form submission to remove an item
    if (isset($_POST['remove_from_cart'])) {
        $productIdToRemove = $_POST['product_id_to_remove'];
        $removeFromCartResult = removeFromCart($productIdToRemove);
        echo "<p>$removeFromCartResult</p>";
    }

    // Check if the total amount is 0
    if ($totalAmount == 0) {
        // Display "Empty" only
        echo "Empty";
    } else {
        // Display the cart table
        ?>

        <table>
            <tr>
                <th>Product ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php foreach ($cart_items as $cart_item): ?>
                <tr>
                 <td>
                <?php include 'config.php';
                 $p_id=$cart_item['id']; 
                 $sql="SELECT * FROM categories where p_id='$p_id'";
                 $run=mysqli_query($connect,$sql);
                    if(mysqli_num_rows($run)){
                        while($show=mysqli_fetch_array($run)){?>
                            <?php  echo "<img src='uploads/".$show['p_image']."' style='width:100%; height:10vh;'>";?><?php
                        }
                    
                 }?></td>
                    <td><?= $cart_item['id'] ?></td>
                    <td><?= $cart_item['name'] ?></td>
                    <td>$<?= $cart_item['price'] ?></td>
                    <td><?= $cart_item['quantity'],"QTY" ?></td>
                    <td>$<?= $cart_item['price'] * $cart_item['quantity'] ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="product_id_to_remove" value="<?= $cart_item['id'] ?>">
                            <button type="submit" name="remove_from_cart" class="remove-cart"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="5">Total Amount</td>
                <td>$<?= $totalAmount ?></td>
            </tr>
        </table>

        <?php
    }
} else {
    echo "Your cart is empty.";
}?>
<style>
    table{
        margin-top:100px;
    }

</style>