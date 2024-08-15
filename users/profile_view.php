<?php include"./layout/header.php";

if($_SESSION['login']==false){
    header('Location: ./login.php');
}

include "./database/conn.php";
$id=$_SESSION['ID'];
$sql="SELECT * FROM users WHERE ID=$id";

$result=$conn->query($sql);
$res=mysqli_fetch_assoc($result);

?>
<!-- <div class="profile-container-out"></div> -->

<h1 name="name" style="display:none;">Profile</h1>
<div class="container">
   
    <div class="profile-container">

        <!-- Headding -->
        <div class="profile-heading">
            <h1 style="text-align:center">User Profile</h1>
            
        </div>

       

        <!-- profile-right dive -->
        <div class="profile-right">
            <div class="profile-info-div">
               <div class="pro-input">
                    <label for="fnmae">First Name</label>
                    <h2><?php echo $res['first_Name'];?></h2>
               </div>
               <div class="pro-input">
                    <label for="lnmae">Last Name</label>
                    <h2><?php echo $res['last_Name'];?></h2>
               </div>
               
               <div class="pro-input">
                    <label for="number">Phone Number</label>
                    <h2><?php echo $res['phone_Number'];?></h2>
                </div>
                <div class="pro-input">
                    <label for="username">Username</label>
                    <h2><?php echo $res['username'];?></h2>
               </div>
                <div class="pro-input">
                    <label for="gmail">Gmail</label>
                    <h2><?php echo $res['gmail'];?></h2>
                </div>
            </div>
            
        </div>

         <!-- Profile lef Dive -->
         <div class="profile-left">
            <div class="profile-img-div">
                <img src="./users/<?php echo $res['image'];?>" alt="picachu">
            </div>
            
        </div>

        <!-- Profile-btn div  -->
        <div class="profile-btn">
            <button class="card-btn"><a style="color:#fff;font-size:20px;text-decoration:none" href="./profile.php?ID=<?php echo $res['ID'];?>">Click Here To Update</a></button>
        </div>
    </div>
</div>
<?php include "./layout/footer.php"; ?> 