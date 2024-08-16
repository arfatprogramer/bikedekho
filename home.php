<?php
include "./database/conn.php";
$sql="SELECT * FROM home_page ";
$res=mysqli_query($conn,$sql);
$res=mysqli_fetch_assoc($res);
$title =$res['title'];
$sql="SELECT * FROM products WHERE ID='$title'";

$res=mysqli_query($conn,$sql);
$res=mysqli_fetch_assoc($res);

?>

<div class="home-container">
    <div class="home-text">
    <h1 name="name" style="display:none;">Home</h1>
    <div class="clock">
        
        
    </div>
    <div class="home-text-heading">
        <h1><?php echo $res['title']?></h1>
        <h2>Engine Cc :<?php echo $res['engine_cc']?></h2>
            <h3><?php echo $res['breaks']?></h3>
            <h2><?php echo $res['price']?> </h2>
        <!-- <button class="home-btn">Know More</button> -->
        <a href="./product_view_page.php?ID=<?php echo $res['ID']?>"><button class="home-btn">Know More</button></a>
    </div>
 
    </div>
    <div class="home-image">
        <img class="home-img" src="./Images/<?php echo $res['image']?>" alt="img">
    </div>
   
</div>

 <!-- clock script  -->

<!-- offer tag Design -->
 <!-- offer tag Design -->
<div class="container">
    <div class="left-line"></div>
    <div class="center">
        <div class="circle"></div>
        <h3>More Product</h3>
        <div class="circle"></div>
    </div>
 </div>
 
 <!-- Card  -->
 <?php include'cards.php'?>

<!-- offer tag Design -->
<?php include'offerTag.php'?>
<?php include'slider.php'?>

