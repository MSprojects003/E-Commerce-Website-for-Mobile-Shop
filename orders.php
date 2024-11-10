<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_panel/Orders</title>
    <link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <h1>Order List</h1><div class="menu"><a href="admin_panel.php"><i class="fa-solid fa-house"></i></a> </div>
    
<?php
include 'config.php';

// Fetch all orders with customer details from the orders and customer tables

$sql = "SELECT * FROM orders ORDER BY O_ID DESC";
$run = mysqli_query($connect, $sql);
if (mysqli_num_rows($run)>0) {
?>
<ul>
<?php
while ($show = mysqli_fetch_array($run)) {
?>
<li id="li">
  <a href="orders_details.php?O_ID=<?php echo $show['O_ID']; ?>">
    Order ID = <?php echo $show['O_ID']; ?></a>
    <span><?php echo $show['O_Date'] ; ?></span>
    <h3 id="h3"><?php $delivery = $show['delivered'];

    if ($delivery == 'Pending') {
      echo "<h3 style='background:linear-gradient(105deg,black,orange);color:white;font-size:30px;padding-left:10px; padding-right:10px;  margin-top:5px;margin-bottom:5px;'>Pending</h3>";

    } else {
      echo $delivery;
    }

  ?></h3>

     
  <h3 id="h3"><?php $status = $show['status'];

    if ($status == 'new') {
      echo "<h3 style='background:linear-gradient(45deg,red,orange);color:white;font-size:30px;padding-left:10px; padding-right:10px;  margin-top:5px;margin-bottom:5px;'>New</h3>";

    } else {
      echo $status;
    }

  ?></h3>
  </li>
<?php
}
}else{
    ?><h3 style="text-align:center; font-size:40px; opacity:0.5;">No Orders</h3><?php
}
?>
</ul>



<?php 

include 'config.php';

$sql2 = "SELECT * FROM orders WHERE status = 'new'";
$run2 = mysqli_query($connect, $sql2);

if ($run2 === true) { // Use the equality operator here
    ?>
    <script>
        // Correct the capital 'B' in 'getElementById'
        let li = document.getElementById('li');
        let h3 = document.getElementById('h3');

        // Correct the equality check
        if (h3.textContent === 'new') {
            li.style.background-color = 'blue';
        }
    </script>
    <?php
}

?>

 

 

 

 
</body>
</html>
<style>
     .menu i{
        font-size:50px;
        margin:20px;
     }
    h1{
        text-align:center;
    }
    li{
        background:white;
        margin:10px;
        display:flex;
        justify-content:space-between;
        box-shadow:0px 0px 10px black;

    }
    .li-1{
        background-color:silver;

    }
    li:hover{
        transform:scale(1.01);
        transition:0.5s ease-in-out;
        background:rgb(0,0,0,0.05);
    }
    li h3{
        margin-right:100px;
    }
    .h3-1{
        color:red;
        background:black;
        padding:20px;
        height:3vh;
         margin-top:4px;
        margin-bottom:-5px;
    }
    li a{
        margin-left:100px;
        text-decoration:none;
        color:white;
        background:black;
        padding:20px;
        margin:5px;
        box-shadow:2px 0px 3px white;
    }
    li a:hover{
        color:black;
        background:white;
        transition:0.5s ease-in-out;
        box-shadow:0px 0px 10px black;
    }
    
</style>
 