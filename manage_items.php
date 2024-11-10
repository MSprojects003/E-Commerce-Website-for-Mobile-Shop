<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iMobile.lk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    


  <nav class="navbar bg-body-tertiary nav-bar-1">
    <div class="container-fluid">
      <a class="navbar-brand logo1" href="index.php" ><img src="/imobile.lk/i_mobile_logo_restore_copy__6_-removebg-preview.png" ></a>
      <form class="d-flex" role="search" action="search.php" enctype="multipart/form-data" >
        <input class="form-control me-2 search-input" method="get" type="search" name="search_name" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"  ><img src="./icons8-search-64.png" class="search-icon1"></button>
      </form>
    </div>
  </nav>
<br><br><br>  
<button class="add" onclick="openform1();">add items</button>



  

<!-- add items form-->
<button class="email" onclick="orders();" >Orders</button>

<script>
  function orders(){
    window.location.href="orders.php";
  }
</script>
<form action="" method="post" enctype="multipart/form-data" class="additems" id="additems1">

<input type="text" name="name" placeholder=" Item name" >
<input type="number" name="price" placeholder=" Item Price" >
 
<input type="file" name="image"  >

<h4>Category</h4>
<input type="radio" value="Accessories" name="category" require>Accessories
<input type="radio" value="Tempered" name="category" require>Tempered glass
<input type="radio" value="Back-cover" name="category" require>Back- Cover

<input type="text" name="info1" id="" placeholder=" info-1" >
<input type="text" name="info2" id="" placeholder=" info-2">

<button name="add">Add</button>

</form>
<!-- edit php function-->
<?php
 include'config.php' ;
if(isset($_POST['edit'])){
  $id=$_POST['e_id'];
   $sql1="select *from categories where p_id='$id'";
   $run1=mysqli_query($connect,$sql1);
    if(mysqli_num_rows($run1)){
      while($row=mysqli_fetch_array($run1)){?>
      <!-- edit popup-->
        <form action="" method="post" enctype="multipart/form-data" class="edit-form">
         
        <input type="hidden" name="old_image" value=<?php  echo $row['p_image'];?>>
        <span>Item_ID</span>
        <input type="text" name="edit_id" id="" value=<?php  echo $row['p_id'];?>>
        <span>Item_Name</span>
        <input type="text" name="edit_name" id="" value=<?php  echo  $row['p_name'];?>>
        <span>Item_price</span>
        <input type="text" name="edit_price" id="" value=<?php  echo $row['p_price'];?>>
        <span>Item_image</span>
        <input type="file" name="edit_image" id="" value=<?php echo $row['p_image']?> >
        <span>Item_info_1</span>
        <input type="text" name="edit_info_1" id="" value=<?php  echo $row['p_info_1'];?>>
        <span>Item_info_2</span>
        <input type="text" name="edit_info_2" id="" value=<?php  echo $row['p_info_2'];?>>
        <span>Discount</span>
        <input type="number" name="discount" id="" value=<?php  echo $row['p_discount'];?>>
        <span>Old Price</span>
        <input type="text" name="old_price" id="" value=<?php  echo $row['p_price'];?>>
        <button name="done" class="btn-edit">Edit</button>
        
       
        </form>
<?php
      }
    }
   }


?>




  <!-- php edit function--><?php  

if(isset($_POST['done'])){
  $e_id=$_POST['edit_id'];
  $edit_price=$_POST['edit_price'];
  $edit_name=$_POST['edit_name'];
  $edit_info_1=$_POST['edit_info_1'];
  $edit_info_2=$_POST['edit_info_2'];
  $p_discount=$_POST['discount'];
  $old_price=$_POST['old_price'];
  $old_image=$_POST['old_image'];
  $edit_image1=$_FILES['edit_image']['name'];
  $temp_file=$_FILES['edit_image']['tmp_name'];
  
  

$sql2="UPDATE `categories` SET `p_name` = '".$edit_name."', `p_image`='".$edit_image1."',`p_price`='".$edit_price."', p_info_1='".$edit_info_1."',p_info_2='".$edit_info_2."',p_discount='".$p_discount."',old_price='".$old_price."' WHERE `categories`.`p_id` = $e_id";
$results=mysqli_query($connect,$sql2);
if($results){
  $uploads='uploads/';
  @unlink($uploads.$old_image);
  move_uploaded_file($temp_file, $uploads. $edit_image1);
  
}
}
?>
  

 
 
 
 




  



<?php
/* add items*/
 

$connect=mysqli_connect("localhost","root","","imobile");

if(isset($_POST['add'])){
$p_name=$_POST['name'];
$p_price=$_POST['price'];
$p_info_1=$_POST['info1'];
$p_info_2=$_POST['info2'];
$p_category=$_POST['category'];
 
 

$p_image=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];

$upload='uploads/' ;

move_uploaded_file($temp, $upload. $p_image);



$sql="INSERT into `categories`(p_name,p_price,p_image,p_info_1,p_info_2,p_category) values('$p_name','$p_price','$p_image','$p_info_1','$p_info_2','$p_category' )";
$results=mysqli_query($connect,$sql);

if($results){
    ?>
    <script>
        document.write=alert(" Item Added Successful");
    </script><?php
}


}



?>


<style>
  body{
    margin:0;
  }

.add input[type="text"],input[type="file"],input[type="radio"]{
    display:block;
      
   
}
.additems{
  background-color: white;
    box-shadow: 0px 3px 5px black;
    display: block;
    margin: 20px;
    width: 20%;
    padding: 20px;
    visibility: hidden;
    transform: scale(0);
    position:fixed;
   
     
}
button.add{
  background-color: blue;
  box-shadow: 0px 3px 5px black;
  color: white;
  padding: 20px;
  font-weight:bold;
  margin-left: 20%;
  position:fixed;
  top:30px;
  z-index: 3;
  right: 50px;
  border:none;
  
   
   

}
button.email{
  background-color: red;
  box-shadow: 0px 3px 5px black;
  color: white;
  padding: 20px;
  font-weight:bold;
  margin-left: 20%;
  position:fixed;
  border:none;
  top:30px;
  z-index: 3;
  right: 200px;
}
button.email:hover{
  background-color:white;
  color:black;
}
button.add:hover{
  background-color:black;
  color:red;
}
.open-additems1{
   visibility: visible;
   transform: scale(1);
   transition: 0.5s;
  
}
/* edit form*/
form.edit-form {
   
  background-color: white;
  box-shadow: 0px 3px 5px black;
  padding:20px;
   
  width:20%;
  margin:20px;
  position: sticky;
  float:right;
  top: 5%;
  right: 10%;
  z-index:5;


   

}
form.edit-form input[type="text"],input[type="number"]{
  display: block;
  margin:10px;
 
}

</style>
 


<!-- view and manage items-->

<hr>
<div class="body-2">
<?php 















$sql="SELECT * FROM categories";
$run= mysqli_query($connect,$sql);
if(mysqli_num_rows($run)){
  while($show=mysqli_fetch_array($run)){
    ?>
   <div class="items-1" >
             
               
               
             <?php 
            
             echo "<img src='uploads/".$show['p_image']."'>";
             
             ?>
             <div class="view-name">
 
               <?php  $p_name= $show['p_name']; 
                      echo substr($p_name,0,20),"...";
               
               ?>
             </div>
             <div class="view-price">
               <?php echo"Rs. ", $show['p_price'];?>
             </div>
             <div class="discount"><div class="old-price">Rs.<?php echo $show['old_price'];?><div class="percentage">

             -<?php echo $show['p_discount'];?>%</div></div></div>
             <div class="manage">
             <form action="" method="post" enctype="multipart/form-data">
             <input type="hidden"  name="e_id" value="<?php echo $show['p_id'];?>" >
             <input type="hidden"  name="d_image" value="<?php echo $show['p_image'];?>" >
              
              <button class="btn-edit" name="edit">Edit</button>
              <button class="btn-delete" name="delete">Delete</button></form>
             </div>
             <h6 class="h6-category"><?php echo $show['p_category'];?>
  </h6>
  <?php 
include 'config.php';

if(isset($_POST['delete'])){ 
$e_id=$_POST['e_id'];
 $d_image=$_POST['d_image'];
$uploads='uploads/';


$sql3="DELETE FROM `categories` WHERE `categories`.`p_id` = '$e_id'";
$query=mysqli_query($connect,$sql3);
if($query){
  @unlink($uploads.$d_image);
}

 


}

?>

              
   </div>
         
    
           <?php
 

  }
}


?>
</div>



<?php   


 


?>

</body></html>
<script>
    let form1=document.getElementById("additems1");
 function openform1(){

  form1.classList.toggle("open-additems1");

 }
</script>

<!-- style for view and edit manage itms-->
<style>
       .body-2{
        background:linear-gradient(white,rgb(241, 238, 238));
       
       }
      .items-1{
        margin-left: 10px;
        width:20%;
        margin-top: 10px;
        padding: 20px;
        display: inline-block;
        box-shadow: 0px 2px 3px black;
        margin-bottom: 10px;

        
      }
      .items-1:hover{
         
        background-color: rgba(219, 210, 210, 0.763);
        box-shadow: 0px 3px 4px black;
      }
       
    .items-1 img{
         width: 100%;
         height: 230px;
      }
      .view-name{
        font-size: 15px;
        text-align: center;
      }
 
     .view-price{
      font-size: 23px;
      color: red;
      font-weight: bold;
     }
     /* manage buttons*/
     .manage{
      text-align:center;
     }
     .btn-edit{
      padding: 10px;
      background-color: black;
      color:white;
      width:30%;
      border: none;

     }
     .btn-edit:hover{
      box-shadow: 0px 2px 4px black;
      background-color: white;
      color:black;
      font-weight:bold;
     }
     .btn-delete{
      padding:10px;
      background-color: red;
      border: none;
     }
     .btn-delete:hover{
      box-shadow: 0px 2px 4px black;
      background-color: white;
      color:black;
      font-weight:bold;

     }
     h6.h6-category{
      margin-top: 10px;
      font-size: 13px;
      font-weight:bold;
      color: red;

     }
     .discount{
      background-color:transparent;
    height:5vh;
    

     }
     .discount .old-price{
      color:rgb(0,0,0,0.7);
      font-weight:bold;
      display:flex;
      text-decoration:line-through;
     }
     .discount .old-price .percentage{
      color:red;
      margin-left:10px;
      
     }
      
      </style>
