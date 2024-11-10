 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="pictures/icon.png">
 
   </head>
 <body>
 <div class="menu"><a href="admin_panel.php"><i class="fa-solid fa-house"></i></a><a href="orders.php"><i class="fa-regular fa-circle-left"></i> </a></div>

<h1>Order details</h1>


<div class="content">
    
<?php
include 'config.php';

$O_ID = $_GET['O_ID'];

$sql = "SELECT *
FROM customer c
INNER JOIN orders o ON c.C_ID = o.C_ID
WHERE o.O_ID = ?";

$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, 'i', $O_ID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result->num_rows > 0) {
    echo "<h2>Customer details</h2>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h3>Customer ID                                 : C00" . $row['C_ID'];
        echo "<h3>Customer Name                            : " . $row['C_name'];
        echo "<h3>Customer Mobile Number           : " . $row['C_Phone'];
        echo "<h3>Customer Address                            : " . $row['C_Address'];

        echo "<h2> Product Details</h2";
        echo "<br><br><br>";


        

        $sql2 = "SELECT * FROM bill AS b INNER JOIN orders o ON o.O_ID = b.O_ID WHERE o.O_ID = ?";
        $stmt2 = mysqli_prepare($connect, $sql2);
        mysqli_stmt_bind_param($stmt2, 'i', $O_ID);
        mysqli_stmt_execute($stmt2);
        $result2 = mysqli_stmt_get_result($stmt2);

        if ($result2->num_rows > 0) {
            while ($row2 = mysqli_fetch_assoc($result2)) {?>
           <div class="list"><?php
                  
                   $ppprice = $row2['p_price'];
                    
                  $numbers = explode(',', $ppprice);
                  
                  // Join and convert to integer
                  $valConcatenated = implode($numbers);
                  $val2 = intval($valConcatenated);
                  echo $val2;
                  
                   
                  
              

                echo "Product ID : P00" , $row2['P_ID'],"<br>";
                $pid=$row2['P_ID'];
                echo  "prodcut Name : ",$row2['p_name'],"<br>";
                echo "Product Price : " , $row2['p_price'],"<br>";
                echo  "prodcut Quantity : ",$row2['quantity'],"<br>";
                
                $imagsql="SELECT * FROM categories where p_id='$pid'";
                $runsql=mysqli_query($connect,$imagsql);
                if(mysqli_num_rows($runsql)){
                  while($row3=mysqli_fetch_array($runsql)){
                     echo "<img src='uploads/".$row3['p_image']."' style='width:auto; height:20vh;' ><br>";
                  }
                }

               
                echo "Total Amount   : ",$row2['TotalAmount'];?></div><?php
            }
        } 
           $total= $row['Total_Price'];
           $shipping=350;
        echo"Sub Total :                            Rs.",$total,"<br>"; 
      echo "Shipping Charge :                            Rs.",$shipping,"<br><br>";
         echo"Total :                                  Rs.",$total + $shipping;
      echo"<br><br><br>";
         echo "<hr><br>";
?>

            

    <?php    
    if(isset($_POST['send'])){
         $update="UPDATE orders set status='Order Done' where O_ID='$O_ID'";
         $query=mysqli_query($connect,$update);
         if($query==true){

             
?>


 

  
    
<script>      
          
          let btn=document.getElementById("btn");
          btn.style.display='none';
          

          

</script><?php
         }
      
      }}
      


    }

    if(isset($_POST['delivered'])){
      $update="UPDATE orders set delivered='Delivered' where O_ID='$O_ID'";
      $query=mysqli_query($connect,$update);
      if($query==true){
?>
         <script>      
          
          let btn1=document.getElementById("btn-1");
          btn1.style.display='none';
          

          

</script>
    <?php
}//j2sskwskwps
}$sql3="SELECT * FROM orders where O_ID='$O_ID'";
$run3=mysqli_query($connect,$sql3);
if(mysqli_num_rows($run3)){
   while($show1=mysqli_fetch_array($run3)){
       $status=$show1['status'];
       $delivery=$show1['delivered'];
       if($status=='Order Done'){

           
        echo $status;
        ?><br><br>
        <?php


       }else{
         ?>
         <form action="" method="post" enctype="multipart/form-data">
         <button name="send" id="btn">Send Order</button>
         
         </form>
         <?php
       }

       if($delivery=='Delivered'){
         echo $delivery;
       }else{?>

         <form action="" method="post" enctype="multipart/form-data">
         <button name="delivered" id="btn-1" > Delivered </button>
         </form><?php
       }

 
         

       }
      
   } 
//isjwopowdk
?>





 




</div>

 </body>
 </html>
 <style>
    .content{
        border:1px solid black;
        padding:30px;
        
    }
    .list{
      margin-bottom:10px;
      border:1px solid black;
      text-align:left;
      font-size:15px;
      line-height:40px;
      padding-left:20px;
    }
    .list h3{
      border-bottom:none;
    }
    .content h3{
        line-height:30px;
        border-bottom:1px solid black;
    }

 .menu i{
        font-size:50px;
        margin:20px;
     }
     h1{
        text-align:center;
        margin-bottom:40px;
     }
     .content h2{
        text-align:center;
        margin-bottom:30px;
     }
     </style>