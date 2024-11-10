
<?php

if(isset($_POST['done'])){
    $uname=$_POST['uname'];// get the value from input name="uname" of reg.html
    $paswd=$_POST['paswd'];

if($uname=="shabnam" and $paswd == "123"){
    ?>
   <script>// using a internel javascript 
     document.write=alert("added");

   </script>
<?php // opening the php again 

}else{
    ?>
    <script>// using a internel javascript 
      document.write=alert("failed");
 
    </script>
 <?php 
}





}


?>