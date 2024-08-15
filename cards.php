
<?php include "./database/conn.php";

    $sql="SELECT *FROM products";
    $result = $conn->query($sql);
?>
   
<div class="container">
    <?php  while($res=mysqli_fetch_assoc($result)){?>
    <div class="card">
        <a href="./product_view_page.php?ID=<?php echo $res['ID'];?>">
        <div class="card-img">
            <p class="discount">25%</p>
            <img height='200px'src="./Images/<?php echo$res['image'];?>" alt="">
        </div>
        </a>
        <div class="card-text">
            <h2><?php echo $res['title'];?></h2>
            <h3>(<?php echo $res['breaks'];?>)</h3>
            <p class="Prise">Rs. <?php echo $res['price'];?></p>
                <button class="card-btn"><a  href="./product_view_page.php?ID=<?php echo $res['ID'];?>">Know More</a></button>
            </div>
    </div>
    <?php   }?>
</div>