 <!DOCTYPE html>
 <html>
 <head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Dashboard</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
   
  
 </head>
 <body>
<?php 


session_start(); // Start or use existing session

// Handle session management:
if (isset($_SESSION['authenticated'])) {
    // User is logged in, redirect to admin panel
    header('Location: admin_panel.php');
    exit; // Ensure no further code executes
}else{



login();
}
   function login(){
?>
<div class="form1"> 
 <form action="" method="post" enctype="multipart/form-data">
  <span>user name</span>
  <input type="text" name="uname" id="" required>
  <span>password</span>
  <input type="password" name="paswd" id="" required>

  <button name="login">Login</button>

  <h5 id="h5" style="display: none; color: red;"></h5>
  <h4 style="color: red;">Create Account? <a href="accountre" style="color:white;">Click Here</a></h4>



 </form>
</div>
   
<?php
}?>

 <?php
  if(isset($_POST['login'])){

    include 'config.php';

    $uname=$_POST['uname'];
    $paswd=$_POST['paswd'];

    $sql="SELECT * FROM register";
    $query=mysqli_query($connect, $sql);

    if(mysqli_num_rows($query)){
      while($row=mysqli_fetch_array($query)){
        $user_name=$row['uname'];
        $password=$row['paswd'];

        if($uname==$user_name && $paswd==$password){?>
          <script>
        window.location.href="admin_panel";

          </script><?php
        }else{
           ?>

           <script>
     let h5=document.getElementById('h5');
     h5.style.display="block";
     h5.innerHTML='Incorrect User Name and Password';

           </script>
         <?php
        }
      }
    }

  }



?>


<style>
.form1{
  display: flex;
  justify-content: center;
}

  form{
    display: flex;
    flex-direction: column;
    width:40%;
    padding: 20px;
    height:350px;
    gap:18px;
    
    background: linear-gradient(rgb(0,0,0,0.9),rgb(0,0,0,0.7));
  }
  form span{
    color:white;
    font-size: 20px;
    text-shadow: 0 0 5px red;

  }
  form input[type="text"],input[type="password"]{
    background: none;
    border: none;
    outline: none;
    font-size:20px;
    color:white;
    border-bottom: 1px solid red;
    

  }
  form button{
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
</style>





  
 </body>
 </html>