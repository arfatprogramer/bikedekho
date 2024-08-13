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

<h1 name="name" style="display:none;">Profile</h1>
<div class="container">
   
    <div class="profile-container">

        <!-- Headding -->
        <div class="profile-heading">
            <h1 style="text-align:center">Update User Profile</h1>
            
        </div>

       

        <!-- profile-right dive -->
        <div class="profile-right">
            <div class="profile-info-div">
               <div class="pro-input">
                    <label for="first_Name">First Name</label>
                    <input type="text" name="first_Name" id="first_Name" value="<?php echo $res['first_Name'];?>">
               </div>
               <div class="pro-input">
                    <label for="last_Name">Last Name</label>
                    <input type="text" name="last_Name" id="last_Name" value="<?php echo $res['last_Name'];?>">
               </div>
               
               <div class="pro-input">
                    <label for="phone_Number">Phone Number</label>
                    <input type="text" name="phone_Number" id="phone_Number" value="<?php echo $res['phone_Number'];?>">
                </div>
                <div class="pro-input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res['username'];?>">
               </div>
                <div class="pro-input">
                    <label for="gmail">Gmail</label>
                    <input type="email" name="gmail" id="gmail" value="<?php echo $res['gmail'];?>">
                </div>
            </div>
            
        </div>

         <!-- Profile lef Dive -->
         <div class="profile-left">
          
            <div class="pro-input">
                <label for="image">Change Profile Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="profile-img-div">
                <img src="./download.jpg" alt="picachu">
            </div>
            
        </div>

        <!-- Profile-btn div  -->
        <div class="profile-btn">
            <button class="card-btn"><a style="color:#fff;font-size:20px;text-decoration:none" href="./product_view_page.php?ID=<?php echo $res['ID'];?>">Update</a></button>
        </div>
    </div>
</div>
<?php include "./layout/footer.php"; ?> 