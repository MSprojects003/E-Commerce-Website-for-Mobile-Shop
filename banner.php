<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel| Banner</title>
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
<br><br><br> <br>
<div class="menu"><a href="admin_panel.php"><i class="fa-solid fa-house"></i></a> </div>

<h1>Banners</h1>
<button onclick="openform()">+</button>

<form action="" method="POST" enctype="multipart/form-data" class="form-add" id="form-1">
    <div class="form-container"> 
        <span>Banner 1</span>
        <?php 
        include 'config.php';
 $view1="SELECT * from banner";
 $querynew=mysqli_query($connect,$view1);
 
 if(mysqli_num_rows($querynew)<1){?>
    <input type="radio" name="b_name" id=""  value="banner1"  class="br_name" required>
     <?php
     } 
        ?>

<span>Banner 2</span>
<input type="radio" name="b_name" id="" value="banner2" class="br_name" required>
<input type="file" name="img" class="img-1" required>
<hr>
<h4 class="p1">Link</h4>

 
<span>New Arrivals</span>
<input type="radio" name="link" id="" value="new.php" required>
<br>
<span>Offers</span>
<input type="radio" name="link" id="" value="offers.php" required>

<br>
<span>none</span>
<input type="radio" name="link" id="" value="" required>
<hr><br>
<button name="add" class="btn-1">ADD</button>
</div>

<style>
    .form-add{

        visibility:hidden;
        padding:40px;
        background:linear-gradient(white,silver);
        box-shadow: 0 0 10px black;
       scale:0.1;
        display: flex;
        justify-content: center;
        align-items: center;
        transform: translateX(30%);
        height:380px;
        width:20%;
    }
    .menu i{
        font-size: 50px;
    }
    .form-add .br_name,.img-1, .link{
         margin-bottom:10px;
         display: flex;
         height:4vh;
        width:80%;
        
        
    }
    .p1{
       font-weight: 900;
       color:rgb(0,0,0,0.8);
       font-size:20px;  
    }
    .form-container{
        display: block;
    }
    .btn-1{
        background-color:black;
        color:white;
        padding:5px;
       
        width:80%;
        display: block;
    }

    .open-form-add{
        visibility: visible;
        transition:0.5s ease-in-out;
        scale: 1;;
    }

</style>

<script>
     let form1=document.getElementById("form-1")

function openform(){
   

    form1.classList.toggle("open-form-add");
}

</script>






</form>

<!-- phpo for insert data -->

   <?php    
   
   include 'config.php';
   

   if(isset($_POST['add'])){
     $br_name=$_POST['b_name'];
     $link=$_POST['link'];
     
     $br_img=$_FILES['img']['name'];
    
     $temp=$_FILES['img']['tmp_name'];


     $path="banner/";

     move_uploaded_file($temp,$path.$br_img);

     $sql="INSERT INTO banner(ban_name,ban_image,link)values('$br_name','$br_img','$link')";
     $run=mysqli_query($connect,$sql);

     if($run){?>
        <script>
            document.write=alert("Banner Image Added Succesfully");
            </script>
            <?php
     }else{
        ?>
        <script>
            document.write=alert("Banner Image Added Failed");
            </script>
            <?php
     }





   }
   
   
   ?>



<!-- php for4 view banneres-->
    
     <?php   
     
     
     include 'config.php';
     

     $view="SELECT * from banner";
     $query=mysqli_query($connect,$view);
     
     if(mysqli_num_rows($query)){
        
        while($show=mysqli_fetch_array($query)){?>

        <div class="card">
            <div class="card-2">
            <div class="name"><?php  echo $show['ban_name'];?></div>
           
            <div class="image">
                <?php  
                  echo "<img src='banner/".$show['ban_image']."'>";
                ?>
            </div>
            <br>
            <div class="link-view">
                <?php echo "link : ",$show['link'];?>
            </div>
            <br>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="b_id" id="" value=<?php echo $show['id'];?> >
                <input type="hidden" name="old_img" id="" value=<?php echo $show['ban_image'];?>>
             <button class="update" name="update">Upadte</button>
             <button class="delete" name="delete">Delete</button>
             </form>
        
        </div>
            </div><?php
        }
     }else{
        echo '<h1>No banners</h1> ';
     }
     
     
     
     ?>
     <style>
        
         .card{
            display:inline-flex;
            flex-wrap: wrap;

         }
         .card .name{
        display: flex;
        flex-direction: column;
         }
         .card-2{
          margin:10px;
           box-shadow: 0 0 10px black;
           padding:10px;
         }
         

         .image img{
           width:400px;
           height:300px;
        }
        button.update{
            background:orange;
            color:red;
            
            font-weight: 900;
            border:none;
            border-radius:5px;
            padding:10px;
            box-shadow: 0 0 10px black;;


        }
        .link-view{
            font-size: 20px;
            font-weight:900;
             
        }
        button.update:hover{
            background:white;
            color:black;
        }
        button.delete:hover{
            background:white;
            color:black;
        }
        button.delete{
            background:red;
            border:none;
            border-radius: 5px;
            padding:10px;
            font-weight: 900;
            color:white;
            box-shadow:0 0 10px black;
        }

     </style>



<!-- php for update-->


<?php    

if(isset($_POST['update'])){
    $b_id=$_POST['b_id'];
    
    $view2="SELECT * FROM banner where id='$b_id'";
    $query_run=mysqli_query($connect,$view2);

    if(mysqli_num_rows($query_run)){
        while($fetch=mysqli_fetch_array($query_run)){
            ?>

             <form action="" method="post" enctype="multipart/form-data" class="form2">
                <button class="close1" onclick="close()" id="close1">&times;</button>
                <input type="hidden" name="old_image" value=<?php  echo $fetch['ban_image'];?>>
               <input type="hidden" name="e_id" id="" value=<?php echo $fetch['id'];?>>

                 <span>Offers</span>
               <input type="radio" name="e_link" id="" value="offers.php" <?php echo ($fetch['link'] == 'offers.php') ? 'checked' : ''; ?>>
               <span>New Arrivals</span>
               <input type="radio" name="e_link" id="" value="new.php" <?php echo ($fetch['link'] == 'new.php') ? 'checked' : ''; ?>>
<hr>
                <span>Banner 1</span>
               <input type="radio" name="e_name" id="" value=<?php echo ($fetch['ban_name']=='banner1')? 'checked' : '';?>>
               <span>Banner 2</span>
               <input type="radio" name="e_name" id="" value=<?php echo ($fetch['ban_name']=='banner2')? 'checked' : '';?>>
               <hr>
               <input type="file" name="e_img" id="">
               <div class="btn-update"> <button name="change" class="btn-change">Change</button></div>
              


<style>
.form2{
    display: flex;
    flex-direction: column;
    padding:20px;
    justify-content: center;
    align-items: center;
   position: fixed;
   top:150px;
   left:300px;
   box-shadow: 0 0 10px black;
    width:20%;
    background: white;
}
.form2 input[type="text"],input[type="number"]{
    margin:10px;
    height:3vh;
    width:100%;
    background: none;
    outline: none;
    border:none;
    border-bottom:1px solid black;
}
.form2 input[type="file"]{
    color:blue;
    margin:10px;
}
button.close1{
    width:30px;
    background: black;
    border: none;
    font-weight: 900;
    color:red;
    font-size: 20px;;
    height:30px;
}
.btn-update{
    display: flex;
    justify-content: center;

}
.form2 button.btn-change{
    width:100%;
    background: black;
    color:white;
    border: none;
    padding:10px;
    border-radius: 5px;
}
</style>
             </form>





<?php 
 






        }


    }
}
 


if(isset($_POST['change'])){
    $e_id=$_POST['e_id'];
    $e_name=$_POST['e_name'];
    $e_link=$_POST['e_link'];
    $old_image=$_POST['old_image'];
    $e_img=$_FILES['e_img']['name'];
    $temp_file=$_FILES['e_img']['tmp_name'];

    $change="UPDATE banner SET ban_name = '".$e_name."', ban_image = '".$e_img."', link = '".$e_link."' WHERE banner.id = '$e_id'";
   
    
     
      $uploads='banner/';
      @unlink($uploads.$old_image);
      move_uploaded_file($temp_file, $uploads. $e_img);

      $results=mysqli_query($connect,$change);
      
    

}




?>


<!-- php for delete banner-->


<?php 

if(isset($_POST['delete'])){
    $d_id=$_POST['b_id'];
    $d_image=$_POST['old_img'];

    $uploads='banner/';

    $delete="DELETE from banner where banner.id= $d_id";
    $run=mysqli_query($connect,$delete);

    @unlink($uploads.$d_image);
}


?>



<!-- script for cose button un update form -->

<script>
    let close=document.getElementById("close1");

    function close1(){
        close.style.display="none";

    }
</script>


</body>
</html>