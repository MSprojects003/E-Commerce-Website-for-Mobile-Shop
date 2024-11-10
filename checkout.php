<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
	<link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="nav_bar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="mediaq.css">
    <link rel="stylesheet" href="items.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
          echo"0";}?></span></a></button>        <style>
         

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
        </style>
       
    </nav>
  </div>
  <br><br><br><br><br>
  

    
 
<?php
  
  ?>
   
  
  <div class="wrappper">
		 
		<div class="project">
			<div class="shop">
            <?php 
  
  include 'config.php';
   $id=$_GET['p_id'];
    

  $sql="SELECT * FROM categories where p_id='$id'";
  $run=mysqli_query($connect,$sql);
  if(mysqli_num_rows($run)){
   while($show=mysqli_fetch_array($run)){
       ?>
<form method="post" action="" class="form-1">
  
<div class="box"><?php
                echo "<img src='uploads/".$show['p_image']."'>";
                       
                    
                    ?>
					<div class="content">
						<h3 id="h3"><?php $name=$show['p_name']; echo $name;?></h3>
						<h4 id="h4"><?php echo "Rs. ", $pp_price=number_format($show['p_price']);?></h4> 
						<div class="box-2"><hr style="width:200%;margin-left:-200px;">
						

     
							 
						<p class="unit">Quantity: <span><input type="number"  name="quantity" id="displayText"   disabled></span></p>
						<hr>

						
						
						
						 
						<p><span>Shipping</span> <span class="shipping">Rs.350</span></p>
				        <hr>
				        <p class="total"><span>Total</span> <span id="total" >  </span>
						
    </div>

						
						 </div>
				</div>
				<?php 
				  

				   
				  $price=$show['p_price'];
				   
				   }}?>
				 
			</div>
			
			<div class="right-bar">

				
				 <p class="heading"> BILLING DETAILS </p>
				 
				<p><span>Your Name:</span> <input type="text" name="C_Name"></p>
				<hr>
				<p><span>Contact Number:</span> <input type="text" name="C_Phone"></p>
				<hr>
				<input type="hidden" value=<?php echo $price;?> name="price">
				  <hr>
				<p><span>Address:</span> <input type="text" name="C_Address"></p>
				<hr>
				 <p><label for="inputText">Enter Quantity:</label>
                           <input type="number" id="inputText" style="background:none; border:none; outline:none; border-bottom:1px solid black;"></p>
						   <input type="hidden"   name="quantity" id="displayText1">
				  <button class="a" name="checkout"><i class="fa-regular fa-money-bill-1"></i>Place order</button> 
				 
			</div>
				
		</div>
				</form>
	</div>
	<script>
	</script>
	<!-- javascropt for input text -->
	<script>
        // Get the input field and display div
        let inputField = document.getElementById("inputText");
        let displayDiv = document.getElementById("displayText");
		let displayDiv1 = document.getElementById("displayText1");

        // Add an event listener to the input field
        inputField.addEventListener("input", function () {
            // Display the value on the page as the user types
            displayDiv.value =  inputField.value;
			displayDiv1.value =  inputField.value;
			Quantity1= displayDiv.value ;
							let price= <?php echo $price;?>;
							let total=(price *  Quantity1) + 350;
							let s_total=total.toLocaleString();
							document.getElementById("total").innerHTML=`Rs.${s_total}`;
        });
		
		
    </script>

	<!----->

<?php

         if(isset($_POST['checkout'])){


			include 'config.php';

			$C_name=$_POST['C_Name'];
			$C_Phone=$_POST['C_Phone'];
			$C_Address=$_POST['C_Address'];
			$Date = date('Y-m-d H:i:s');
			 $quantity=$_POST['quantity'];
			 $p_price=intval($price);
			 $Quantity1=intval($quantity);
			 
			$totalamount=$p_price * $Quantity1;
			 
			

			
		    $sql2="INSERT INTO  customer(C_name,C_Phone,C_Address)Values('$C_name','$C_Phone','$C_Address')";
			$run2=mysqli_query($connect,$sql2);
            $C_ID=mysqli_insert_id($connect);
			if($run2==true){
				$sql3="INSERT INTO orders (C_ID,O_Date,status,Total_Price,delivered)values('$C_ID','$Date','new','$totalamount','Pending')";
				$run3=mysqli_query($connect,$sql3);
                 $O_ID=mysqli_insert_id($connect);
				if($run3==true){
					
					$sql4="INSERT INTO bill(O_ID,P_ID,TotalAmount,p_name,p_price,quantity)values('$O_ID','$id','$totalamount','$name','$p_price','$Quantity1')";
					$run4=mysqli_query($connect,$sql4);

					if($run4==true){

						if($run2==true && $run3==true && $run==true){
							
							echo "<script> location.href='index.php';</script>";
							echo"<script>document.write=alert('Thank You for shopping with us
    will  give out prompt services to You.'); </script>";
						}
					}
				}
			}
 
             
			 
		 }





?>




<script>
							 
							document.getElementById("quantity").value=quantity;
							document.getElementById("hidden_quantity").value= quantity;
							
							 
							 
						</script>

        </body>
        </html>
        <style>

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
	background:  #16161D;
	font-family: montserrat;
}
.wrappper {
	max-width: 1200px;
	margin: 0 auto;
    margin-top:100px;
   
    
}
.wrappper h1 {
	padding: 20px 0;
	text-align: center;
	text-transform: uppercase;
}
.project {
	display: flex;
}
.shop {
	flex: 75%;
}
p.heading {
	color:#16161D;
	font-weight:900;
	font-size:30px !important;
	 
	 
}
.box {
	display: flex;
	width: 100%;
	height: 450px;
	overflow: hidden;
	margin-bottom: 20px;
	background: #fff;
	 
	transition: all .6s ease;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
 
.form-1 p{
	display:flex;
	justify-content:space-between;
	font-weight:900;
	transform:translate(-20%);
	 
}
.form-1 p input[type="number"]{
	color:rgb(0,0,0,0.5);
	border:none;
	background:none;
	 
	font-size:20px;
	font-weight:900;
}
.box:hover {
	border: none;
	transform: scale(1.01);
}
.box img {
	width: 200px;
	height: 150px;
	transform:scale(0.7);
}
.content {
	padding: 20px;
	width: 100%;
	position: relative;
	 
}
.content h3 {
	margin-bottom: 30px;
}
.content h4 {
	margin-bottom: 50px;
}
.btn-area {
	position: absolute;
	bottom: 20px;
	right: 20px;
	padding: 10px 25px;
	background-color: #3a71a9;
	color: white;
	cursor: pointer;
	border-radius: 5px;
}
.btn-area:hover {
	background-color: #76bfb6;
	color: #fff;
	font-weight: 600;
}
.unit input {
	width: 100px;
	padding: 5px;
	text-align: center;
}
.btn-area i {
	margin-right: 5px;
}
.right-bar {
	flex: 65%;
	 
	margin-left: 20px;
	padding: 20px;
	height: 450px;
	border-radius: 5px;
	background: #fff;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.right-bar hr {
	margin-bottom: 15px;
}
.right-bar input[type="text"]{
	background:none;
	border:none;
	outline:none;
	border-bottom:1px solid black;
}
.right-bar p {
	display: flex;
	justify-content: space-between;
	margin-bottom: 30px;
	font-size: 20px;
}
.right-bar .a {
	background-color: black;
	color: #fff;
	text-decoration: none;
	display: block;
	text-align: center;
	height: 40px;
	width:100%;
	line-height: 40px;
	font-weight: 900;
}
.right-bar i {
	margin-right: 15px;
}
.right-bar .a:hover {
	background-color: #3972a7;
}
span.shipping{
	font-size:20px;
	color:rgb(0,0,0,0.5);
}
span#total{
	color:blue;
	font-size:25px;
	font-weight:bold;
}
 
 
@media screen and (max-width: 700px) {
	.content h3 {
		margin-bottom: 15px;
	}
	.content h4 {
		margin-bottom: 20px;
	}
	.btn2 {
		display: none;
	}
	 
	.box img {
		height: 150px;
		width: 200px;
		margin-left:60px;
	}
	form.form-1{
		margin-left: -70px;
    margin-top: 50px;
	}
}
@media screen and (max-width: 900px) {
	.project {
		flex-direction: column;
		margin:5px;
	}
	.right-bar {
		margin-left: 0;
		margin-bottom: 20px;
	}
}
@media screen and (max-width: 1250px) {
	.wrapper {
		max-width: 95%;
	}
}
@media (max-width:500px){
	.project{
		display:flex !important;
		flex-direction: column !important;
	}
}
 </style>

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
            <li><a href="new.php">New Arrivals</a></li>
            <li><a href="offers.php">Offers</a></li>
             
             
          </ul>
        </div>

        <div class="footer-col">
          <h4>Categories</h4>
          <ul class="links">
            <li><a href="categories.php?p_category=Accessories | Gadgets">Accessories & Gadgets</a></li>
            <li><a href="categories.php?p_category=Back Covers">Back Covers</a></li>
            <li><a href="categories.php?p_category=Tempered Glasses">Tempered Glass</a></li>
            <li><a href="categories.php?p_category=Smart Watches">Smart Watch</a></li>
            <li><a href="categories.php?p_category=Speakers | Subwoofers">Speakers</a></li>
            <li><a href="categories.php?p_category=Airpods | Earbuds">Air Pods</a></li>
            <li><a href="categories.php?p_category=Adapters">Adapter</a></li>
            <li><a href="categories.php?p_category=Home Appliances">Home Appliances</a></li>
            
          </ul>
        </div>
       
        
      
      </div>
      </div>
      <div class="footer-2">
      Copyright © 2023 <a href="index.php" style="color: silver; text-decoration:none;">imobileSupreme</a> All Rights Reserved.Developed By <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgDRvbCLtPJtPjxkcDKgsQVXBDtskjxQBWLpRSsHgtCzgHcrlwWwFGwCsTlnVztJVfqsV" style="color:red; text-decoration:none">MS Projects</a>
      </div>
    </section>
 
</body>
</html>