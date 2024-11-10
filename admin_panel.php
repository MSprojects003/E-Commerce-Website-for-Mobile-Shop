<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    
<?php
// Start a session to store login information
session_start();

// Check if the user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>

  <nav class="navbar bg-body-tertiary nav-bar-1" style=" background-color:green !important; box-shadow:0px 0px 10px black;" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand logo1" href="index.php" ><img src="./newlogo-removebg-preview.png"  style="width:100%; height:100px; "></a>
      <form class="d-flex"    role="search" method="post" action="" enctype="multipart/form-data" style="position:absolute; left:500px;" >
        <input class="form-control me-2 search-input"   type="search" name="search_input" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" style="background:blue; color:white;"  name="search" ><i class="fa fa-search"></i></button>
      </form>
    </div>
  </nav>
<br><br><br>  
<a href="#navbar"><button class="add" onclick="openform1();">add items</button></a>


<button class="account" onclick="account();" >account</button>
<button class="banner" onclick="banner();" >Banner</button>




<!-- add items form-->
<button class="email" onclick="orders();" >Orders</button>

<script>
  function orders(){
    window.location.href="orders.php";
  }
</script>
<script>
  function banner(){
    window.location.href="banner.php";
  }
</script>
<script>
  function account(){
    window.location.href="accountre.php";
  }
</script>

<form action="" method="post" enctype="multipart/form-data" class="additems" id="additems1">

<input type="text" name="name" placeholder=" Item name" >
<input type="number" name="price" placeholder=" Item Price" >
 
<input type="file" name="image"  >

<h4>Category</h4>
<div class="categories">
<span>Accessories & Gadgets
<input type="radio" value="Accessories | Gadgets" name="category" require></span>
<span>Tempered glass
<input type="radio" value="Tempered Glasses" name="category" require></span>
<span>Back- Cover
<input type="radio" value="Back Covers" name="category" require></span>
<span>Adapter
<input type="radio" value="Adapters" name="category" require></span>
<span>Airpods & Earbuds
<input type="radio" value="Airpods | Earbuds" name="category" require></span>
<span>Cables 
<input type="radio" value="Cables" name="category" require></span>
<span>Charger
<input type="radio" value="Chargers" name="category" require></span>
<span>Computer Accessories
<input type="radio" value="Computer Accessories" name="category" require></span>
<span>Display
<input type="radio" value="Displays" name="category" require></span>
<span>Wired Earphones
<input type="radio" value="Wired Earphones" name="category" require></span>
<span>Headphones
<input type="radio" value="Head Phones" name="category" require></span>
<span>Holders & Stands & Tripods
<input type="radio" value="Holders | Stands | Tripods" name="category" require></span>
<span>Home Appliances
<input type="radio" value="Home Appliances" name="category" require></span>
<span>Mobile Phone Battery
<input type="radio" value="Mobile Phone Battery" name="category" require></span>
<span>Mobile Phones
<input type="radio" value="Mobile Phones" name="category" require></span>
 
<span>OTG & Hubs & Converter
<input type="radio" value="OTG | Hubs | Converters" name="category" require></span>
<span>Pendrive & Memory Card
<input type="radio" value="Pendrives | Memory Cards" name="category" require></span>
<span>Power Banks 
<input type="radio" value="Power Banks" name="category" require></span>
<span>Repair Tools
<input type="radio" value="Repair Tools" name="category" require></span>
<span>Smart Watch
<input type="radio" value="Smart Watches" name="category" require></span>
<span>Speakers & Subwoofers
<input type="radio" value="Speakers | Subwoofers" name="category" require></span>
<span>TWS Neckband
<input type="radio" value="TWS Neckbands" name="category" require></span>
</div>
<hr>

<input type="text" name="info1" id="" placeholder=" info-1" >
<input type="text" name="info2" id="" placeholder=" info-2">
<input type="text" name="info3" id="" placeholder=" info-3" >
<input type="text" name="info4" id="" placeholder=" info-4">
<input type="text" name="info5" id="" placeholder=" info-5" >
<input type="text" name="info6" id="" placeholder=" info-6">
<h4>Brand </h4>
<div class="brand">
<span>Lito :<input type="radio" value="lito" name="p_brand" ></span>
<span>Redington :<input type="radio" value="redington" name="p_brand"></span>
<span>MTB :<input type="radio" value="mtb" name="p_brand"></span>
<span>Kaiyue :<input type="radio" value="kaiyue" name="p_brand"></span>
<span>Joyroom :<input type="radio" value="joyroom" name="p_brand"></span>
<span>J.C.COM :<input type="radio" value="jccom" name="p_brand"></span>
<span>Greenlion :<input type="radio" value="greenlion" name="p_brand"></span>
<span>Denmen:<input type="radio" value="denmen" name="p_brand"></span>

<span>Samsung :<input type="radio" value="samsung" name="p_brand"></span>
<span>lenovo :<input type="radio" value="lenovo" name="p_brand"></span>
<span>wiwu :<input type="radio" value="wiwu" name="p_brand"></span>
<span>AKG :<input type="radio" value="akg" name="p_brand"></span>
<span>JBL :<input type="radio" value="jbl" name="p_brand"></span>
<span>mcdudo :<input type="radio" value="mcdodo" name="p_brand"></span>
<span>SkullCandy :<input type="radio" value="skullcandy" name="p_brand"></span>
<span>Inkax:<input type="radio" value="inkax" name="p_brand"></span>

<span>Redmi :<input type="radio" value="mi" name="p_brand"></span>
<span>realmi :<input type="radio" value="realme" name="p_brand"></span>
<span>Huawei :<input type="radio" value="huawei" name="p_brand"></span>
<span>Kingston :<input type="radio" value="kingston" name="p_brand"></span>
<span>Sandisk:<input type="radio" value="sandisk" name="p_brand"></span>

<span>Remax :<input type="radio" value="remax" name="p_brand"></span>
<span>Marshal :<input type="radio" value="marshal" name="p_brand"></span>
<span>Foneng :<input type="radio" value="foneng" name="p_brand"></span>
<span>Anker :<input type="radio" value="anker" name="p_brand"></span>
<span>Pavareal :<input type="radio" value="pavareal" name="p_brand"></span>
<span>Apple :<input type="radio" value="Apple" name="p_brand"></span>
<span>VIVO:<input type="radio" value="Vivo" name="p_brand"></span>
<span>Yesido :<input type="radio" value="Yesido" name="p_brand"></span>
<span>Other :<input type="radio" value="Other" name="p_brand"></span>
 </div>
<button name="add" style="width:100%;
border:none; 
background:blue;
color:white;
padding:10px;"
>Add</button>

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
        <form action="" method="post" enctype="multipart/form-data" class="edit-form" id="edit-1">
          <?php $pe_name= $row['p_name'];?>
          <br><br>
       
        <span>Item_ID</span>
        <input type="text" name="edit_id" id="" value=<?php  echo $row['p_id'];?>>
        <span>Item_Name</span>
        <input type="text" name="edit_name" id="" value="<?php  echo  $row['p_name'];?>">
        <span>Item_price</span>
        <input type="text" name="edit_price" id="" value=<?php  echo $row['p_price'];?>>
        <br><br>
         
        <span>Item_info_1</span>
        <input type="text" name="edit_info_1" id="" value="<?php  echo $row['p_info_1'];?>">
        <span>Item_info_2</span>
        <input type="text" name="edit_info_2" id="" value="<?php  echo $row['p_info_2'];?>">
        <span>Discount</span>
        <input type="number" name="discount" id="" value=<?php  echo $row['p_discount'];?>>
        <span>Old Price</span>
        <input type="text" name="old_price" id="" value=<?php  echo $row['p_price'];?>>
        <span>Status</span>
        <span><input type="radio" name="e_status1" id="" value="available" checked >Available</span>
        <span><input type="radio" name="e_status1" id="" value="sold"  >Sold</span>
        <br>
        <hr>
        <span> Brand</span>
        <div class="brand">
        <span>Lito :<input type="radio" value="lito" name="e_brand" <?php echo ($row['p_brand'] == 'lito') ? 'checked' : ''; ?>></span>
<span>Redington :<input type="radio" value="redington" name="e_brand" <?php echo ($row['p_brand'] == 'redington') ? 'checked' : ''; ?>></span>
<span>MTB :<input type="radio" value="mtb" name="e_brand" <?php echo ($row['p_brand'] == 'mtb') ? 'checked' : ''; ?>></span>
<span>Kaiyue :<input type="radio" value="kaiyue" name="e_brand" <?php echo ($row['p_brand'] == 'kaiyue') ? 'checked' : ''; ?>></span>
<span>Joyroom :<input type="radio" value="joyroom" name="e_brand" <?php echo ($row['p_brand'] == 'joyroom') ? 'checked' : ''; ?>></span>
<span>J.C.COM :<input type="radio" value="jccom" name="e_brand" <?php echo ($row['p_brand'] == 'jccom') ? 'checked' : ''; ?>></span>
<span>Greenlion :<input type="radio" value="greenlion" name="e_brand" <?php echo ($row['p_brand'] == 'greenlion') ? 'checked' : ''; ?>></span>
<span>Denmen:<input type="radio" value="denmen" name="e_brand" <?php echo ($row['p_brand'] == 'denmen') ? 'checked' : ''; ?>></span>

<span>Samsung :<input type="radio" value="samsung" name="e_brand" <?php echo ($row['p_brand'] == 'samsung') ? 'checked' : ''; ?>></span>
<span>lenovo :<input type="radio" value="lenovo" name="e_brand" <?php echo ($row['p_brand'] == 'lenovo') ? 'checked' : ''; ?>></span>
<span>wiwu :<input type="radio" value="wiwu" name="e_brand" <?php echo ($row['p_brand'] == 'wiwu') ? 'checked' : ''; ?>></span>
<span>AKG :<input type="radio" value="akg" name="e_brand" <?php echo ($row['p_brand'] == 'akg') ? 'checked' : ''; ?>></span>
<span>JBL :<input type="radio" value="jbl" name="e_brand" <?php echo ($row['p_brand'] == 'jbl') ? 'checked' : ''; ?>></span>
<span>mcdudo :<input type="radio" value="mcdodo" name="e_brand" <?php echo ($row['p_brand'] == 'mcdudo') ? 'checked' : ''; ?>></span>
<span>SkullCandy :<input type="radio" value="skullcandy" name="e_brand" <?php echo ($row['p_brand'] == 'skullcandy') ? 'checked' : ''; ?>></span>
<span>Inkax:<input type="radio" value="inkax" name="e_brand" <?php echo ($row['p_brand'] == 'inkax') ? 'checked' : ''; ?>></span>

<span>Redmi :<input type="radio" value="mi" name="e_brand" <?php echo ($row['p_brand'] == 'mi') ? 'checked' : ''; ?>></span>
<span>realmi :<input type="radio" value="realme" name="e_brand" <?php echo ($row['p_brand'] == 'realme') ? 'checked' : ''; ?>></span>
<span>Huawei :<input type="radio" value="huawei" name="e_brand" <?php echo ($row['p_brand'] == 'huawei') ? 'checked' : ''; ?>></span>
<span>Kingston :<input type="radio" value="kingston" name="e_brand" <?php echo ($row['p_brand'] == 'kingston') ? 'checked' : ''; ?>></span>
<span>Sandisk:<input type="radio" value="sandisk" name="e_brand" <?php echo ($row['p_brand'] == 'sandisk') ? 'checked' : ''; ?>></span>

<span>Remax :<input type="radio" value="remax" name="e_brand" <?php echo ($row['p_brand'] == 'remax') ? 'checked' : ''; ?>></span>
<span>Marshal :<input type="radio" value="marshal" name="e_brand" <?php echo ($row['p_brand'] == 'marshal') ? 'checked' : ''; ?>></span>
<span>Foneng :<input type="radio" value="foneng" name="e_brand" <?php echo ($row['p_brand'] == 'foneng') ? 'checked' : ''; ?>></span>
<span>Anker :<input type="radio" value="anker" name="e_brand" <?php echo ($row['p_brand'] == 'anker') ? 'checked' : ''; ?>></span>
<span>Pavareal :<input type="radio" value="pavareal" name="e_brand" <?php echo ($row['p_brand'] == 'pavareal') ? 'checked' : ''; ?>></span>
<span>Apple :<input type="radio" value="Apple" name="e_brand" <?php echo ($row['p_brand'] == 'Apple') ? 'checked' : ''; ?>></span>
<span>Vivo :<input type="radio" value="Vivo" name="e_brand" <?php echo ($row['p_brand'] == 'Vivo') ? 'checked' : ''; ?>></span>
<span>Yesido :<input type="radio" value="Yesido" name="e_brand" <?php echo ($row['p_brand'] == 'Yesido') ? 'checked' : ''; ?>></span>

<span>Other :<input type="radio" value="Other" name="e_brand" <?php echo ($row['p_brand'] == 'Other') ? 'checked' : ''; ?>></span>
      </div>
      <hr>


      <h4>Category</h4>
<div class="categories">
<span>Accessories & Gadgets
<input type="radio" value="Accessories | Gadgets" name="e_category" <?php echo ($row['p_category'] == 'Accessories | Gadgets') ? 'checked' : ''; ?>require></span>
<span>Tempered glass
<input type="radio" value="Tempered Glasses" name="e_category" <?php echo ($row['p_category'] == 'Tempered Glasses') ? 'checked' : ''; ?> require></span>
<span>Back- Cover
<input type="radio" value="Back Covers" name="e_category" <?php echo ($row['p_category'] == 'Back Covers') ? 'checked' : ''; ?> require></span>
<span>Adapter
<input type="radio" value="Adapters" name="e_category" <?php echo ($row['p_category'] == 'Adapters') ? 'checked' : ''; ?> require></span>
<span>Airpods & Earbuds
<input type="radio" value="Airpods | Earbuds" name="e_category" <?php echo ($row['p_category'] == 'Airpods | Earbuds') ? 'checked' : ''; ?> require></span>
<span>Cables 
<input type="radio" value="Cables" name="e_category" <?php echo ($row['p_category'] == 'Cables') ? 'checked' : ''; ?> require></span>
<span>Charger
<input type="radio" value="Chargers" name="e_category" <?php echo ($row['p_category'] == 'Chargers') ? 'checked' : ''; ?> require></span>
<span>Computer Accessories
<input type="radio" value="Computer Accessories" name="e_category" <?php echo ($row['p_category'] == 'Computer Accessories') ? 'checked' : ''; ?> require></span>
<span>Display
<input type="radio" value="Displays" name="e_category"  <?php echo ($row['p_category'] == 'Displays') ? 'checked' : ''; ?>  require></span>
<span>Wired Earphones
<input type="radio" value="Wired Earphones" name="e_category"<?php echo ($row['p_category'] == 'Wired Earphones') ? 'checked' : ''; ?>  require></span>
<span>Headphones
<input type="radio" value="Head Phones" name="e_category" <?php echo ($row['p_category'] == 'Head Phones') ? 'checked' : ''; ?> require></span>
<span>Holders & Stands & Tripods
<input type="radio" value="Holders | Stands | Tripods" name="e_category" <?php echo ($row['p_category'] == 'Holders | Stands | Tripods') ? 'checked' : ''; ?> require></span>
<span>Home Appliances
<input type="radio" value="Home Appliances" name="e_category" <?php echo ($row['p_category'] == 'Home Appliances') ? 'checked' : ''; ?> require></span>
<span>Mobile Phone Battery
<input type="radio" value="Mobile Phone Battery" name="e_category" <?php echo ($row['p_category'] == 'Mobile Phone Battery') ? 'checked' : ''; ?> require></span>
<span>Mobile Phones
<input type="radio" value="Mobile Phones" name="e_category" <?php echo ($row['p_category'] == 'Mobile Phones') ? 'checked' : ''; ?> require></span>
 
<span>OTG & Hubs & Converter
<input type="radio" value="OTG | Hubs | Converters" name="e_category" <?php echo ($row['p_category'] == 'OTG | Hubs | Converters') ? 'checked' : ''; ?> require></span>
<span>Pendrive & Memory Card
<input type="radio" value="Pendrives | Memory Cards" name="e_category" <?php echo ($row['p_category'] == 'Pendrives | Memory Cards') ? 'checked' : ''; ?> require></span>
<span>Power Banks 
<input type="radio" value="Power Banks" name="e_category"  <?php echo ($row['p_category'] == 'Power Banks') ? 'checked' : ''; ?> require></span>
<span>Repair Tools
<input type="radio" value="Repair Tools" name="e_category"  <?php echo ($row['p_category'] == 'Repair Tools') ? 'checked' : ''; ?> require></span>
<span>Smart Watch
<input type="radio" value="Smart Watches" name="e_category"  <?php echo ($row['p_category'] == 'Smart Watches') ? 'checked' : ''; ?> require></span>
<span>Speakers & Subwoofers
<input type="radio" value="Speakers | Subwoofers" name="e_category" <?php echo ($row['p_category'] == 'Speakers | Subwoofers') ? 'checked' : ''; ?>  require></span>
<span>TWS Neckband
<input type="radio" value="TWS Neckbands" name="e_category"  <?php echo ($row['p_category'] == 'TWS Neckbands') ? 'checked' : ''; ?> require></span>
</div>
<hr>


        <button name="done" class="btn-edit">Edit</button>
        <button   class="btn-close" onclick="closeE();">&times;</button>
        
       
        </form>
<?php
      }
    }
   }


?>
<script>
          function closeE(){
            document.getElementById("edit-1").style.display="none";
          }
        </script>




  <!-- php edit function--><?php  

if(isset($_POST['done'])){
  $e_id=$_POST['edit_id'];
  $edit_price=$_POST['edit_price'];
  $edit_name=$_POST['edit_name'];
  $edit_info_1=$_POST['edit_info_1'];
  $edit_info_2=$_POST['edit_info_2'];
  $p_discount=$_POST['discount'];
  $e_status=$_POST['e_status1'];
  $edit_category=$_POST['e_category'];
  $edit_brand=$_POST['e_brand'];
  $old_price=$_POST['old_price'];
  
  
  
  

$sql2="UPDATE `categories` SET `p_name` = '".$edit_name."',`p_price`='".$edit_price."', p_info_1='".$edit_info_1."',p_info_2='".$edit_info_2."',p_discount='".$p_discount."',old_price='".$old_price."', status1='".$e_status."', p_category='".$edit_category."', p_brand='".$edit_brand."' WHERE `categories`.`p_id` = $e_id";
$results=mysqli_query($connect,$sql2);
if($results){
  ?><script>document.write=alert("Item Edited Success");</script>
  <?php
}
}
?>
  

 
 
 
<?php 

if(isset($_POST['edit-fig'])){


// select teh figure //
$e_id2=$_POST['eid2'];
 

$e_img="SELECT * FROM categories where p_id='$e_id2'";
$e_query=mysqli_query($connect,$e_img);

if(mysqli_num_rows($e_query)>0){
  while($fetch2=mysqli_fetch_array($e_query)){

 

?>
<form action="" method="post" enctype="multipart/form-data" class="image-fig1">
<input type="hidden" name="ep_id" id="" value="<?php echo $e_id2;?>">
<button  class="close5"onclick="close5()" id="close5">&times;</button>
<input type="hidden" name="old_image" value=<?php  echo $fetch2['p_image'];?>>

<span>Select the Image</span><br>
<input type="file" name="edit_figure_e" id="">
<button class="editfigbtn" name="edit_image" class="edit-figure" >Edit</button>

</form>
<script>
  let close5=document.getElementById('close5');
  function close5(){
    close5.style.display="none";
  }
</script>
<?php

} }
}





if(isset($_POST['edit_image'])){
     
  $pid2=$_POST['ep_id'];// this is for gwet the id for edit the correct se;ecvted value;
   
  $old_image=$_POST['old_image'];
  $edit_image1=$_FILES['edit_figure_e']['name'];
  $temp_file=$_FILES['edit_figure_e']['tmp_name'];
    

  $edit2_img="UPDATE `categories` set `p_image`='".$edit_image1."' where `categories`.`p_id`='$pid2'";
  $query_fig=mysqli_query($connect,$edit2_img);

  if($query_fig){
    $uploads='uploads/';
    @unlink($uploads.$old_image);
    move_uploaded_file($temp_file, $uploads. $edit_image1);


    
  }

}


?>




  



<?php
/* add items*/
 

$connect=mysqli_connect("localhost","root","","imobilesupreme");

if(isset($_POST['add'])){
$p_name=$_POST['name'];
$p_price=$_POST['price'];
$p_info_1=$_POST['info1'];
$p_info_2=$_POST['info2'];
$p_category=$_POST['category'];
$p_brand=$_POST['p_brand'];
$p_info_3=$_POST['info3'];
$p_info_4=$_POST['info4'];
$p_info_5=$_POST['info5'];
$p_info_6=$_POST['info6'];
 
 

$p_image=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];

$upload='uploads/' ;

move_uploaded_file($temp, $upload. $p_image);



$sql="INSERT into `categories`(p_name,p_price,p_image,p_info_1,p_info_2,p_category,p_discount,old_price,p_brand,p_info_3,p_info_4,p_info_5,p_info_6,status1) values('$p_name','$p_price','$p_image','$p_info_1','$p_info_2','$p_category','','0','$p_brand','$p_info_3','$p_info_4','$p_info_5','$p_info_6','available' )";
$results=mysqli_query($connect,$sql);

if($results){
    ?>
    <script>
        document.write=alert(" Item Added Successful");
    </script><?php
}


}



?>



 


<!-- view and manage items-->

<hr>

<?php   
  $display=false;

  include 'config.php';
  if(isset($_POST['search'])){
    $display=true;
  } 



  
if($display==true){
  $search_input=$_POST['search_input'];

  $search="SELECT * FROM categories where  p_id ='$search_input' || p_name like '%$search_input%'|| p_price like '%$search_input%' || p_info_1 ='$search_input' || p_info_2 ='$search_input' ||  p_info_3 ='$search_input' || p_info_4 ='$search_input' ||  p_info_5 ='$search_input' || p_info_6 ='$search_input' || p_brand = '$search_input' || p_category = '$search_input' || status1 = '$search_input'";
  $search_query=mysqli_query($connect,$search);

  if(mysqli_num_rows($search_query)>0){
    while($search_re=mysqli_fetch_array($search_query)){

      $status=$search_re['status1'];
?>

      <div class="items-1" >
             
               
               
      <?php 
      echo $status;?>
      <form action="admin_panel2.php" method="post" enctype="multipart/form-data" >
       <input type="hidden" name="eid2" id="" value="<?php echo $search_re['p_id'];?>">
     <button class="image-e"  name="edit-fig-2" >
     <?php echo "<img src='uploads/".$search_re['p_image']."'>";?></button></form><?php
      
      ?>
      <div class="view-name">

        <?php  $p_name= $search_re['p_name']; 
               echo substr($p_name,0,20),"...";
        
        ?>
      </div>
      <div class="view-price">
        <?php echo"Rs. ", $search_re['p_price'];?>
      </div>
      <div class="discount"><div class="old-price">Rs.<?php echo $search_re['old_price'];?><div class="percentage">

      -<?php echo $search_re['p_discount'];?>%</div></div></div>
      <div class="manage">
      <form action="admin_panel2.php" method="post" enctype="multipart/form-data">
      <input type="hidden"  name="e_id" value="<?php echo $search_re['p_id'];?>" >
      <input type="hidden"  name="d_image" value="<?php echo $search_re['p_image'];?>" >
       
       <button class="btn-edit" name="edit-2">Edit</button> 
       <button class="btn-delete" name="delete">Delete</button></form>
      </div>
      <h6 class="h6-category"><?php echo $search_re['p_category'];?>
</h6>
<?php 
include 'config.php';


 

if (isset($_POST['delete'])) {
$e_id = $_POST['e_id'];
$d_image = $_POST['d_image'];
$uploads = 'uploads/';

// Check if the category ID exists in the bill table
$sqlCheck = "SELECT p_id FROM bill WHERE p_id = '$e_id'";
$checkResult = mysqli_query($connect, $sqlCheck);

// If the category ID is not referenced in the bill table, proceed with deletion
if (mysqli_num_rows($checkResult) == 0) {
$sql3 = "DELETE FROM `categories` WHERE `categories`.`p_id` = '$e_id'";
$query = mysqli_query($connect, $sql3);

// Delete the associated image if deletion is successful
if ($query) {
   @unlink($uploads . $d_image);
}
} else {
// Display an error message if the category ID is referenced in the bill table
echo "<script> document.write=alert('Cannot delete category as it is referenced in the bill table.')</script>";
}
}


?>

       
</div>
  <?php


    }
  }else{
    echo " no results found";
  }
  
}else{



?>

<div class="body-2">
<?php 

 












$sql="SELECT * FROM categories order by p_id desc";
$run= mysqli_query($connect,$sql);
if(mysqli_num_rows($run)){
  while($show=mysqli_fetch_array($run)){
    $status=$show['status1'];
    
    ?>
   <div class="items-1" >
             
               
               
             <?php 
             echo $status;?>
             <form action="" method="post" enctype="multipart/form-data" >
              <input type="hidden" name="eid2" id="" value="<?php echo $show['p_id'];?>">
            <button class="image-e"  name="edit-fig" >
            <?php echo "<img src='uploads/".$show['p_image']."'>";?></button></form><?php
             
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

if (isset($_POST['delete'])) {
  $e_id = $_POST['e_id'];
  $d_image = $_POST['d_image'];
  $uploads = 'uploads/';

  // Check if the category ID exists in the bill table
  $sqlCheck = "SELECT p_id FROM bill WHERE p_id = '$e_id'";
  $checkResult = mysqli_query($connect, $sqlCheck);

  // If the category ID is not referenced in the bill table, proceed with deletion
  if (mysqli_num_rows($checkResult) == 0) {
      $sql3 = "DELETE FROM `categories` WHERE `categories`.`p_id` = '$e_id'";
      $query = mysqli_query($connect, $sql3);

      // Delete the associated image if deletion is successful
      if ($query) {
          @unlink($uploads . $d_image);
      }
  } else {
      // Display an error message if the category ID is referenced in the bill table
      echo "<script> document.write=alert('Cannot delete category as it is referenced in the bill table.')</script>";
  }
}


?>

              
   </div>
         
    
           <?php
           } 

  }}
  


?>
</div>



<?php   


 
} else {
  // User is not logged in, display the login form

  // Check if the user has submitted the login form
  if (isset($_POST['uname']) && isset($_POST['paswd'])) {
      // Validate the username and password
      // (Replace with your actual authentication logic, e.g., database or file-based)
      $username = $_POST['uname'];
      $password = $_POST['paswd'];
      
      include 'config.php';


      $sql="SELECT * FROM register";
      $query=mysqli_query($connect, $sql);
  
      if(mysqli_num_rows($query)){
        while($row=mysqli_fetch_array($query)){
          $user_name=$row['uname'];
          $paswd=$row['paswd'];
        

       






      if ($username === $user_name && $password === $paswd) {
          // Login successful
          $_SESSION['loggedin'] = true;
          // Redirect to the admin panel after successful login
          ?>
          <script>
            document.write=alert("login Successful")
          </script>
          <?php
          header('Location: admin_panel.php');
          exit();
      } else {
          // Login failed
           $error="Incorrect Username or Password";
      }
  }}}

  // Display the login form
?>
<div class="form1login"> 
 <form action="" method="post" class="formlogin" enctype="multipart/form-data">
  <span>user name</span>
  <input type="text" name="uname" id="" required>
  <span>password</span>
  <input type="password" name="paswd" id="" required>

  <button name="login">Login</button>
   <?php 

   if(isset($error)){
    ?>
    <h5 style=" color: red;"><?php echo $error;?></h5><?php
   }
?>
  
  <h4 style="color: red;">Create Account? <a href="accountre" style="color:white;">Click Here</a></h4>

  

 
 
</form>
</div>
<style>
.form1login{
  display: flex;
  justify-content: center;
  margin-top:20px;
}
.form1login a{
     color: white;
     text-shadow: 0 0 10px red;
}
.form1login a:hover{
      color: black !important;
      font-weight: bold;
      text-shadow: 0 0 10px white;
}

  form.formlogin{
    display: flex;
    flex-direction: column;
    width:40%;
    padding: 20px;
    height:350px;
    gap:18px;
    
    background: linear-gradient(rgb(0,0,0,0.9),rgb(0,0,0,0.7));
  }
  form.formlogin span{
    color:white;
    font-size: 20px;
    text-shadow: 0 0 5px red;

  }
  form.formlogin input[type="text"],input[type="password"]{
    background: none;
    border: none;
    outline: none;
    font-size:20px;
    color:white;
    border-bottom: 1px solid red;
    

  }
  form.formlogin button{
    height: 5vh;
    margin-top:10px;
    background: red;
    color:white;
    font-size:20px;
     border: none;
     outline: none;
     box-shadow: 0 0 10px black;
     border-radius: 10px;
     cursor: pointer;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  form.formlogin button:hover{
    background-color: black;
    color: red;
    box-shadow: 0 0 10px red;
  }
</style>

<?php
}
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
      .image-e{
        border-radius:10px;
      }
      .image-e:hover{
        opacity:0.8;
        filter:drop-shadow(1px 3px 5px black);
        transition: 0.5s ease-in-out;
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
      
     .edit-fig1{

     }
      </style>



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
    width: 100%;
    padding: 20px;
    visibility: hidden;
    transform: scale(0);
    position:absolute;
     
   
     
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
button.account:hover{
  background:linear-gradient(90deg,red,white);
  transition: 3s ease-in-out;
}
button.account{
  background:linear-gradient(45deg,red ,white);
  box-shadow: 0px 3px 5px black;
  color: blue;
   
  padding: 20px;
  font-weight:bold;
  margin-left: 20%;
  position:fixed;
  border:none;
  top:30px;
  z-index: 3;
  right: 400px;

}button.banner:hover{
  background:linear-gradient(90deg,black ,white);
  transition: 3s ease-in-out;
}
button.banner{
  background:linear-gradient(45deg,black ,white);
  box-shadow: 0px 3px 5px black;
  color: red;
   
  padding: 20px;
  font-weight:bold;
  margin-left: 20%;
  position:fixed;
  border:none;
  top:30px;
  z-index: 3;
  right: 300px;

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
.categories{
  display:flex;
  flex-wrap:wrap;
  
}
.categories span{
  padding:10px;
  background:white;
  box-shadow:0px 0px 4px black;
  margin:10px;
}
.brand{
  display:flex;
  flex-wrap:wrap;
}
.brand span{
  padding:10px;
  margin:10px;
  box-shadow:0px 0px 10px black;
}
/* edit form*/
form.edit-form {
  background-color: silver;
  color: red;
  box-shadow: 0px 3px 5px black;
  padding: 20px;
  display: inline-block; /* Corrected property name */
  width: 120%;
  
  position: fixed;
  transform: scale(0.8);
  float: right;
  left:-10%;
  margin-right:-250px;
  top: -13%;
  
  z-index: 5;
}

form.edit-form input[type="text"],input[type="number"]{
  display: inline;
  margin:10px;
 
}
.image-fig1{
  background: linear-gradient(black,rgb(0,0,0,0.7));
  width:30%;
  display: flex;
  justify-content: center;
  flex-direction: column;
  margin: 10px;
  color:white;
  text-align: center;
  padding:20px;
  filter: drop-shadow(20px 22px 30px silver);
}
form.image-fig1 input[type="file"]{
  margin-bottom:10px;
  color:red;
}
.close5{
  color:red;
  background-color: white;
  border:  none;
  width: 30px;
  height: 30px;
}
</style>