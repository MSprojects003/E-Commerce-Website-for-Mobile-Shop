<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
session_start();
include 'config.php';

$sql="SELECT * FROM categories limit 10";
$query=mysqli_query($connect,$sql);
if(mysqli_num_rows($query)){
    while($show=mysqli_fetch_array($query)){
         echo $show['p_id']," .";
        echo $show['p_name'];?>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="number" name="qua" > 
         <input type="hidden" name="id" value=<?php echo $show['p_id'];?>>
         <input type="hidden" name="name" value=<?php echo $show['p_name'];?>>
         <input type="hidden" name="price" value=<?php echo $show['p_price'];?>>
       <button name="addtocart">add to cart</button></form>
       <br>
   
         

<?php





    }
}


if(isset($_POST['addtocart'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $qua=$_POST['qua'];

    $_SESSION['cart'][]=array(
        'id'=>$id,
        'name'=>$name,
        'price'=>$price

    );
}



if(isset($_SESSION['cart'])){
    echo count($_SESSION['cart']);
}else{
    echo "0";
}
 ?>
 <table border="1">
    <tr><th>ID</th>
        <th>Name</th>
        <th> quantity</th></tr>
        

<?php 
$cart=$_SESSION['cart'];

 foreach($cart as $items){
      
 ?><tr>

            <td><?php echo $items['id'];?></td>
            <td><?php echo $items['name'];?></td>
            <td><?php echo $items['price'];?></td>
            <td><button name="remove">remove</button></td>
        </tr>

<?php

 }



?> </table>
 



</body>
</html>