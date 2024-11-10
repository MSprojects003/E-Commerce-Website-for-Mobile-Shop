<?php 
   
   $p_id1=$_GET['p_id'];

    ?>

    <div class="view-image">

    <?php
    
    include 'config.php';
     
    $sql="SELECT * FROM accessories where p_id='$p_id1'";
    $run=mysqli_query($connect,$sql);
    if(mysqli_num_rows($run)){
      while($show=mysqli_fetch_array($run)){
          
         ?>
         <div class="wrap">
            <div class="view-1">
              <div class="view-img">
        <?php  echo "<img src='uploads/".$show['p_image']."'>";
         ?></div> </div>
         
        
         <div class="view-2"><h1 class="view-name" >
           <?php
         echo $show['p_name']; ?>

         </h1>
 <div class="view-price">
          <?php echo "Rs. ", $show['p_price'];?></div>
          <hr>
          <h5>
            <?php echo  $show['p_info_1'];?>
            <br>
            <br>
            <?php
                  echo $show['p_info_2'];
            
            ?>
            
      </h5>
      <div class="buy-btn">
      <button class="btn btn-primary buy1" type="submit" onclick="buy1();">BUY</button>
         </div>
         </div>
         
      </div><?php

        }
    }


    ?>
     
   
   
   <?php
   
   
   ?><style>
   .wrap{
    margin-bottom: 200px;
     
    display: flex;
   }
    .wrap .view-1 {
        width : 50%;
        display: inline-flex;
        margin-left:20px;
        margin-right: 30px;


    }
    .wrap .view-1  img{
        width: 100%;
    }
    .view-price{
      display : block;
      font-weight:bold;
      font-size: 40px;
      margin-top: 20px;
      color: red;
      
      
      

    }
   
    .view-name{
      font-size: 50px;
       
       
    }
    .view-2{
       
      background-color: rgba(229, 221, 221, 0.096);
       
        display: block;
      
      
     
      
    }
    .view-2 h5{
      color:rgb(0,0,0,0.7);
      margin-top: 40px;

    }
    .view-2 .buy-btn button.buy1{

       border: none;
       margin-top:20%;
       outline: none;
       padding: 10px;
      width: 45%;
      font-weight: bold;
      color: white;
      box-shadow: 0px 3px 5px black;
      font-size: 25px;
       background-color: red;
       border-radius:0px;
       
        
    }
    .view-2 .buy-btn button.buy1:hover{
      background-color:  silver;
      color: black;
    }
    
   /* popup */

   .popup-1{
      width: 20%;
      height:  100vh;
      position: fixed;
      top:0%;
      right: -40%;
      
      z-index: 1;
      background-color: red;
   }

   .open-popup-1{
    
    right: 0%;
    transition: 0.8s;
   }
   .popup-1 form{
    margin-top: 20px;
    margin-bottom: 40px;
   }
   .popup-1 form input[type="text"],input[type="number"]{
    background: none;
    border: none;
    margin: 10px;
    outline: none;
    border-bottom: 1px solid white;
    color: white;
    text-align: center;
    -webkit-text-fill-color: white;
   }
   button.btn-location{
      background : none;
      border: none;
      outline: none;
   }
   .map{
      padding:30px;
      background-color: black;
      position: absolute;
      top: 30%;
      width: 100%;
     visibility: hidden;
      transform: scale(0.1);
      position: fixed;

    }
    .open-map{
      visibility: visible;
      transform: scale(1.0);
      transition: 0.5s;
    }
.comments{
  background-color: silver;
  padding:  10px;
  padding-bottom: 100px;
  margin: 10px;
  box-shadow: 0px 1px 3px black;
   
}
.comments h4.head1{
  background-color:white;
}

    </style>
