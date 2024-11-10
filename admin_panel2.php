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
    


  <nav class="navbar bg-body-tertiary nav-bar-1" style=" background-color:green !important; box-shadow:0px 0px 10px black;" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand logo1" href="index.php" ><img src="./newlogo-removebg-preview.png"  style="width:100%; height:100px; "></a>
      <form class="d-flex" role="search" method="post" action="admin_panel.php" enctype="multipart/form-data" style="position:absolute; left:500px;" >
        <input class="form-control me-2 search-input"   type="search" name="search_input" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" style="background:blue; color:white;"  name="search" ><i class="fa fa-search"></i></button>
      </form>
    </div>
  </nav>
<br><br><br>  
<a href="#navbar"><button class="add" onclick="openform1();">HOME</button></a>

 

<button class="banner" onclick="banner();" >Banner</button>


<!-- add items form-->
<button class="email" onclick="orders();" >Orders</button>

<div class="menu"><a href="admin_panel.php"><i class="fa-solid fa-house"></i></a> </div>


<script>
  function orders(){
    window.location.href="orders.php";
  }


  function openform1(){
    window.location.href="admin_panel.php";
  }
</script>
<script>
  function banner(){
    window.location.href="banner.php";
  }
</script>

<!-- php code for getting values from admin panels edit form-->

<?php 


include 'config.php';

if(isset($_POST['edit-2'])){

     $e_id=$_POST['e_id'];
    
     $sql1="SELECT * FROM categories where p_id='$e_id'";
     $run=mysqli_query($connect,$sql1);

     if(mysqli_num_rows($run)){
        while($row=mysqli_fetch_array($run)){?>

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
    ?><script>document.write=alert("Item Edited Success");
      
        window.location.href="admin_panel.php";
    
    
    </script>

    <?php
  }
  }
  ?>
    
  

    <!--   ------------------------->


    <?php 

if(isset($_POST['edit-fig-2'])){


// select teh figure //
$e_id2=$_POST['eid2'];
 

$e_img="SELECT * FROM categories where p_id='$e_id2'";
$e_query=mysqli_query($connect,$e_img);

if(mysqli_num_rows($e_query)>0){
  while($fetch2=mysqli_fetch_array($e_query)){

 

?>
<form action="" method="post" enctype="multipart/form-data" class="image-fig1">
<input type="hidden" name="ep_id" id="" value="<?php echo $e_id2;?>">

<input type="hidden" name="old_image" value=<?php  echo $fetch2['p_image'];?>>

<span>Select the Image</span><br>
<input type="file" name="edit_figure_e" id="">
<button name="edit_image" class="edit-figure" >Edit</button>

</form>
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


<!--   delete-->

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
   ?>
   <script>
    document.write=alert("Item Deleted Successfully");
    window.location.href="admin_panel.php";
   </script><?php
}
} else {
// Display an error message if the category ID is referenced in the bill table
echo "<script> document.write=alert('Cannot delete category as it is referenced in the bill table.')</script>";
}
}


?>

   










</body>
</html>
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
button.banner:hover{
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
  right: 330px;

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