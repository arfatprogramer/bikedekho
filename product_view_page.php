<?php include"./layout/header.php"?>

<?php include "./database/conn.php";

   if(isset($_GET['ID'])){
    $id = $_GET['ID'];
    $sql="SELECT * FROM products WHERE ID=$id";
    $result = $conn->query($sql);
    $res=mysqli_fetch_assoc($result);
    echo "
         <div class='product'>
        <div class='text-div'>
            <div class='text'>
                <p>( ".$res['breaks'].")</p>
                <h1>".$res['title']."</h1>
                <p>-Engine Cc :". $res['engine_cc']." cc</p>
                <p>-Max Power :". $res['max_power']."</p>
                <p>-Tank Capacity :". $res['tank_capacity']."</p>
                <p>-Wheelbase :". $res['wheelbase']."</p>
                <p>-Cooling :". $res['cooling']."</p>
                <p>-Max Torque :". $res['max_torque']."</p>
                <h1>Price : ". $res['price']."</h1>
                <button class='home-btn'>Contac Us</button>
            </div>

        </div>
        <div class='text-div'><img class='image-dive-image' src='./Images/".$res['image']."' alt='bike image'></div>
    </div>
    ";
   }

?>


<h1 name="name" style="display:none;">Product</h1>
<main>
   
    <!-- offer tag Design -->
    <?php include'offerTag.php'?>
    <?php include'slider.php'?>
    <!-- more product  -->
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
</main>
<?php include "./layout/footer.php"; ?> 