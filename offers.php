 

    <?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>offers??NULL</title>
    <link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="nav_bar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="items.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="mediaq.css">
</head>
<body>
    


<div class="wrapper-1">
    <nav>
      <input type="checkbox" id="show-search-1">
      <input type="checkbox" id="show-menu-1">
      <label for="show-menu-1" class="menu-icon-1"><i class="fas fa-bars"></i></label>
      <div class="content-1">
      <div class="logo-1"><a href="index"><img src="./newlogo-removebg-preview.png" alt=""></a></div>
        <ul class="links-1">
          <li><a href="index">Home</a></li>
          
          
         
          
          <li>
            <a href="#" class="desktop-link-1">Categories</a>
            <input type="checkbox" id="show-categories">
            <label for="show-categories">Categories</label>
            <ul>
            <li><a href="categories?p_category=Accessories | Gadgets">Accessories & Gadgets</a></li>
              <li><a href="categories?p_category=Tempered Glasses">Tempered Glass</a></li>
              <li><a href="categories?p_category=Back Covers">Back-covers & Pouches</a></li>
              <li><a href="categories?p_category=Adapters">Adapter</a></li>
              <li><a href="categories?p_category=Airpods | Earbuds">Airpods & Earbuds</a></li>
              <li><a href="categories?p_category=Cables">Cables</a></li>
              <li><a href="categories?p_category=Chargers">Charger  </a></li>
              <li><a href="categories?p_category=Computer Accessories">Computer Accessories</a></li>
              <li><a href="categories?p_category=Displays">Dislplay</a></li>
              <li><a href="categories?p_category=Wired Earphones">Wired Earphone</a></li>
              <li>
                <a href="#" class="desktop-link-1">More</a>
                <input type="checkbox" id="show-more">
                <label for="show-more">More Items </label>
                <ul>
              <li><a href="categories?p_category=Head Phones">Head Phone</a></li>
              <li><a href="categories?p_category=Holders | Stands | Tripods">Holders / Stands / Tripods</a></li>
              <li><a href="categories?p_category=Home Appliances">Home Appliances</a></li>
              <li><a href="categories?p_category=Mobile Phone Battery">Mobile Phone Battery</a></li>
              <li><a href="categories?p_category=Mobile Phones">Mobile Phone</a></li>
              <li><a href="categories?p_category=OTG | Hubs | Converters">OTG / Hubs / Converter</a></li>
              <li><a href="categories?p_category=Pendrives | Memory Cards">Pendrive & Memory Card </a></li>
              <li><a href="categories?p_category=Power Banks">Power Banks </a></li>
              <li><a href="categories?p_category=Repair Tools">Repair Tools</a></li>
              <li><a href="categories?p_category=Smart Watches">Smart Watch</a></li>
              <li><a href="categories?p_category=Speakers | Subwoofers">Speakers & Subwoofers</a></li>
              <li><a href="categories?p_category=TWS Neckbands">TWS Neckband</a></li>
                </ul>
              </li>

            </ul>
          </li>
          <li><a href="contact">Contact us</a></li>
          <li><a href="about">About us</a></li>
          
        </ul>
      </div><!--wdiwdowkd-->
      <label for="show-search-1" class="search-icon-1"><i class="fas fa-search"></i></label>
      <form action="search" class="search-box-1" method="get" enctype="multipart/fomr-data">
        <input type="text" placeholder="Type Something to Search..." name="search_name" required>
        <button type="submit" class="go-icon-1" name="search"><i class="fas fa-search"></i></button>
      </form>
      <button class="cart"  ><a href="cart.php" style="text-decoration:none; color:white;" class="ahref"><i class="fa-solid fa-cart-shopping"></i>
      <span style="color:white;font-size:10px;font-weight:bold;position:absolute;  left:20px; background:red; padding:5px;clip-path:circle();"><?php 
      if(isset($_SESSION['addcart'])){
        echo count($_SESSION['addcart']);}
        else{
          echo"0";}?></span></a></button> <style>
         

          button.cart{
            background:none;
            border:none;
            outline:none;
            font-size:25px;
            margin-right:-70px;
            position:absolute;
            right:0;
            color:white;

          }
          h1.h1-2{
           padding-left:50px;
           color:white;
           background:linear-gradient(100deg,black,transparent);

          }
        </style>
       
    </nav>
  </div>
  <br><br><br><br><br>

<?php 
$result=false;
 
 $check=false;
?>
 

<div class="container">
    <div class="row px-2 mt-4 gap-3" id="filterable-cards">
    <?php include 'config.php';
    $page2=10;
      if(isset($_POST['done'])){
      $page2=$_POST['list'];
       
       
      }else{
      $page2;
      }
      $sql="SELECT * from categories  order by p_id desc limit 10";
$run=mysqli_query($connect,$sql);

if(mysqli_num_rows($run)>0){
  $result=true;
while($show=mysqli_fetch_array($run)){

  $status1=$show['status1'];
  $discount = $show['p_discount'];
     if($discount <> NULL){
    if($status1=='available'){

 ?>
      <!-- Images Filter Buttons Section -->
     
      <!-- Filterable Images / Cards Section -->
      
      <a href=".php?p_id=<?php echo $show['p_id'];?>" class="card p-0" data-name="nature">
         
       <?php
    
    echo "<img src='uploads/".$show['p_image']."'>";?>
     
      
      <div class="view-name">
       <?php $p_name= $show['p_name'];
          $u_p_name=substr($p_name,0,23);
          echo $u_p_name;
?>

      </div>
      <div class="view-price">
        <?php echo "Rs.", $show['p_price'];
        ?>
      </div>
      <div class="view-2">
      <div class="old-price">
        <?php 
        $old_price=$show['old_price'];
         if($old_price==0){
          echo"";
         }else{
          echo "Rs.",$old_price;
         }
         ?>
          </div>
         <div class="discount">
          <?php $discount=$show['p_discount'];
          if($discount==NULL){
            echo "";
          }else{
            echo $discount,"%";
          
          } ?>
        
         </div>
      </div>
      </a>
        <?php
         $check=true;
        }
        else{
          $check=false;
        }}

}}else{
  echo"<h2> 0 Results </h2>";?>
  <script>
        let btnnext=document.getlElementById('nextbtn');
        btnnext.style.display='none';
  </script><?php
}


?>


    
      </div>
      
    </div>



 </div>
 
<!-- php pagination -->
<?php 
     if($check==true){ 
      
      ?>

      
    
     
 <form method="post"  enctype="multipart/form-data"  >

<input type="hidden" name="list" value=<?php echo $page2+10?>>
         <button id="nextbtn"   name="done" class="load-more"> 
         <i class="fa-solid fa-circle-arrow-right load"></i></button> 

         
  </form><?php }else{
    echo"<h2 style='text-align:center;'> <i class='fa-solid fa-triangle-exclamation'></i> NO Offers Available Now! </h2>";
    
    }?>

    

</div>




<style>button.load-more{
         position:absolute;
         right:10px;
         border:none;
         transform:scale(2);
         background:none;
      }
      
      .reveal{
  position: relative;
  transform: translateY(50px);
  opacity: 0;
  transition: 01s all ease;
}

.reveal.active{
  transform: translateY(-10px);
  opacity: 1;
}
      
      
      </style>

      






<br><br>

<hr>
<!-- script  -->





     
    <div class="container">
    <div class="row px-2 mt-4 gap-3" id="filterable-cards">
    <?php include 'config.php';
     $sql = "SELECT * FROM categories LIMIT 4";
     $run = mysqli_query($connect, $sql);
     
if(mysqli_num_rows($run)){
while($show=mysqli_fetch_array($run)){
  $status1=$show['status1'];
  $offers=$show['p_discount'];
  if($status1=='available'){
    if($offers<>NULL){
    
  ?><h1 class="h1-2">Offers</h1>
      <!-- Images Filter Buttons Section -->
     
      <!-- Filterable Images / Cards Section -->
      
      <a href=".php?p_id=<?php echo $show['p_id'];?>" class="card p-0 reveal" data-name="nature">
         
       <?php
    
    echo "<img src='uploads/".$show['p_image']."'>";?>
     
      
      <div class="view-name">
      <?php $p_name=$show['p_name'];
             $l_p_name=substr($p_name,0,10);
             echo $u_p_name,"...";
?>

      </div>
      <div class="view-price">
        <?php echo "Rs.", $show['p_price'];
        ?>
      </div>
      <div class="view-2">
      <div class="old-price">
        <?php 
        $old_price=$show['old_price'];
         if($old_price==0){
          echo"";
         }else{
          echo "Rs.",$old_price;
         }
         ?>
          </div>
         <div class="discount">
          <?php $discount=$show['p_discount'];
          if($discount==NULL){
            echo "";
          }else{
            echo $discount,"%";
          
          } ?>
        
         </div>
      </div>
      </a>
        <?php
  }

        }
}}?>
     
      </div>
      
    



 </div>
       







    </div>

<br>

  

        </bdy>
        </html><script>
  function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 50;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("load", reveal);
window.addEventListener("scroll", reveal);

 

</script>

<!-- footer-->
  <!-- footer-->
  <section class="footer">
     <div class="footer-wrap">
      <div class="footer-row">
      <div class="footer-col">
          <img src="newlogo-removebg-preview.png" alt="">
           
          <div class="icons">
            <a href="https://www.facebook.com/profile.php?id=61553854813459&mibextid=LQQJ4d" target="_blank"><i class="fa-brands fa-facebook-f facebook"></i></a>
            <a href="https://wa.me/+94777143322" target="_blank"><i class="fa-brands fa-whatsapp whatsapp" target="_blank"></i></a>
            <a href="https://instagram.com/imobile_supreme?igshid=MTNiYzNiMzkwZA%3D%3D&utm_source=qr" target="_blank"><i class="fa-brands fa-instagram instagram"></i></a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfpsXfHmqckLpSmkLCHrCSdLJCVmRzMLmSTZxhSdxVHbvvNsnLdGcvwjqJqFQdbfNFMMLB" target="_blank"><i class="fa-solid fa-envelope email" target="_blank"></i></a>
           <a href="https://youtube.com/@ImobileSupreme?si=DBCwJxYMf-qEtVtr" target="_blank"> <i class="fa-brands fa-youtube you-tube"></i></a>
           <a href="https://www.tiktok.com/@imobile_lk?is_from_webapp=1&sender_device=pc" target="_blank"> <i class="fa-brands fa-tiktok tik-tok" target="_blank"></i><a>
            
          </div>
        </div>

       
        <div class="footer-col">
          
          <h4>Our Info</h4>
          <ul class="links">
            <li><i class="fa fa-location" ></i><p > No.21, Galle Road,<br>
                                               Bambalapitiya,<br>
                                               Colombo 04</p></li>
            <li><i class="fa fa-clock"></i> Mon-Sun:8.30 a.m-8.30 p.m </li>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfpsXfHmqckLpSmkLCHrCSdLJCVmRzMLmSTZxhSdxVHbvvNsnLdGcvwjqJqFQdbfNFMMLB" target="_blank" style="text-decoration:none;"><li><i class="fa-solid fa-envelope"></i> imobileSupreme@gmail.com </li></a>
            <li><i class="fa-solid fa-phone"></i>077 714 3322</li>
           
             
          </ul>
        </div>

        <div class="footer-col">
          <h4>Shop</h4>
          <ul class="links">
            <li><a href="new">New Arrivals</a></li>
            <li><a href="offers">Offers</a></li>
             
             
          </ul>
        </div>

        <div class="footer-col">
          <h4>Categories</h4>
          <ul class="links">
            <li><a href="categories?p_category=Accessories | Gadgets">Accessories & Gadgets</a></li>
            <li><a href="categories?p_category=Back Covers">Back Covers</a></li>
            <li><a href="categories?p_category=Tempered Glasses">Tempered Glass</a></li>
            <li><a href="categories?p_category=Smart Watches">Smart Watch</a></li>
            <li><a href="categories?p_category=Speakers | Subwoofers">Speakers</a></li>
            <li><a href="categories?p_category=Airpods | Earbuds">Air Pods</a></li>
            <li><a href="categories?p_category=Adapters">Adapter</a></li>
            <li><a href="categories?p_category=Home Appliances">Home Appliances</a></li>
            
          </ul>
        </div>
       
        
      
      </div>
      </div>
      <div class="footer-2">
      Copyright © 2023 <a href="index" style="color: silver; text-decoration:none;">imobileSupreme</a> All Rights Reserved.Developed By <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgDRvbCLtPJtPjxkcDKgsQVXBDtskjxQBWLpRSsHgtCzgHcrlwWwFGwCsTlnVztJVfqsV" style="color:red; text-decoration:none">MS Projects</a>
      </div>
    </section>
 

</body>
</html>