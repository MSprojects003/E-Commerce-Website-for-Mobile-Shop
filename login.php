
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <form action="" method="post" enctype="multipart/form-data" >




 <input type="text" name="fname" id="">
 <input type="file" name="img" id="">

 <button name="done">done</button>
 
 </form>


 <?php 


   include 'config.php';




    if(isset($_POST['done'])){
        $fname=$_POST['fname'];
        $img=$_FILES['img']['name'];
        $temp_file=$_FILES['img']['tmp_name'];

        $path='test1/';

        move_uploaded_file($temp_file, $path.$img);

        $sql1="INSERT INTO shabnam (name,image)values('$fname','$img')";

        $run=mysqli_query($connect,$sql1);


}



  $sql2="SELECT * FROM shabnam ";
 $run2=mysqli_query($connect,$sql2);
 if(mysqli_num_rows($run2)){
   while($show=mysqli_fetch_array($run2)){
    ?>
    <div class="img1"><?php
     echo "<img src='test1/".$show['image']."'>";?>
     
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="e_id" id="" value="<?php echo $show['id'];?>">
        <button name="edit">edit</button>
    



    </form>
    
    </div>
<?php
   }


 }



 
 



?>
<?php

   if(isset($_POST['edit'])){

    $e_id=$_POST['e_id'];


      $sql3="SELECT * FROM shabnam where id='$e_id'";
      $run3=mysqli_query($connect,$sql3);
      if(mysqli_num_rows($run3)){
        while($row=mysqli_fetch_array($run3)){
?>
            <form action="" method="post" enctype="multipart/form-data">
 
             
        <input type="text" name="e_name1" id="" value="<?php echo $row['name'];?>">
        <button name="edit2">edit</button>
    

            </form>

<?php
        }
      }

?>
   
   
    <?php



   }

?>

 
<style>
    .img1{
        width: 200px;
        height:200px;
        background: red;
        display: inline-block;
    }
    .img1 img{
        width:100%;
        height:80px;
    }
     



</style>

</body>
</html>
