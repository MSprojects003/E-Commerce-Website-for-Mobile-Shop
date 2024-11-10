<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Account</title>
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
    
<div class="menu"><a href="admin_panel.php"><i class="fa-solid fa-house"></i></a></div>
</div>
  </nav>
<br><br><br> 
    

<style>
    .menu{
        font-size: 50px;

        
    }
    .menu i{
        color:red;
    }
</style>



<form action="" method="post" enctype="multipart/form-data" class="form1">
<span>Full name</span>
<input type="text" name="fname" id="" >
<span>Phone Number</span>
<input type="number" name="number" id="">
<span>security key[8 Digits number]</span>
<input type="text" name="key" id="" placeholder="Ab1&....">
<span>Your password</span>
<input type="password" name="paswd1" id="">
<span>Confirm Password</span>
<h5 class="pass_com" id="pass_com" style="display:none;"></h5>
<input type="password" name="paswd-conf" id="">

<button name="register">Register</button>
<h5 class="h5" id="h51" style="display:none; color: red;">incorrect password</h5>

</form>



<?php   

if(isset($_POST['register'])){


    $fname=$_POST['fname'];
    $number=$_POST['number'];
    $key=$_POST['key'];
    $paswd1=$_POST['paswd1'];
    $paswd_conf=$_POST['paswd-conf'];

    $keyno='0755624023';

// checkingb the key is true pr false

   if($key<>$keyno){
   ?>
    <script>
            
    let h5=document.getElementById('h51');
    h5.style.display="block";
    h5.innerHTML="Incorrect Key value Entered";


</script>

<?php

   }else{

// checking the both passwords are same

if($paswd1<>$paswd_conf){?>
    

<script>
        
        let pass_com=document.getElementById('pass_com');
        pass_com.style.display="block";
        pass_com.innerHTML="Password doesn't matched";

    </script>

<?php

}else{
    
   // then both password is true, and and key also true,

   // then add proceed teh register now
    include 'config.php';
   $sql="INSERT INTO register(uname,paswd,number) values('$fname','$paswd_conf','$number')";
   $query=mysqli_query($connect,$sql);

   if($query){?>
    <script>
        
    let h5=document.getElementById('h51');
    h5.style.display="block";
    h5.innerHTML="Registration Successfull. <a href='dashboard.php'>Login Here</a>";

</script>
<?php
   }else{?>
    <script>
        
    let h5=document.getElementById('h51');
    h5.style.display="block";
    h5.innerHTML="Registration failed. Check Your connection";

</script>
   <?php
   }




}

   }



   
    

}




?>

</body>

</html>

<style>
    form.form1{
        display: flex;
        flex-direction: column;
        width:30%;
        padding: 20px;
        gap:15px;
        background-color: black;
        color: white;
        
    }
</style>




<hr>

<h1>Available Accounts</h1>
<br><br>
<table border="1">
     
<?php
include 'config.php';

$sql1="SELECT * FROM register";
$query1=mysqli_query($connect,$sql1);

if(mysqli_num_rows($query1)){?>
 <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>password</th>
        
        <th>Delete</th>

    </tr><?php
    while($fetch=mysqli_fetch_array($query1)){?>
        <tr>
        <td><?php echo $fetch['I_id'];?></td>
        <td><?php echo $fetch['uname'];?></td>
        <td><?php echo $fetch['number'];?></td>
        <td><?php echo $fetch['paswd'];?></td>
       
        <td> <form action="" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="did" id="" value="<?php echo $fetch['I_id'];?>">    
        <button name="delete">Delete</button></form></td>

    </tr>
    <?php
    }
}


?>

<?php 



if(isset($_POST['delete'])){

    include 'config.php';

$did=$_POST['did'];
    $delete="DELETE FROM register where I_id='$did'";
    $query=mysqli_query($connect,$delete);
    if($query){?>
        <script>
        document.write=alert("Account Deleted Successfully");</script><?php
    }
}



?>


   
</table>


</body>
</html>


