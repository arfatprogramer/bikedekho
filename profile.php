<?php include"./layout/header.php";

if($_SESSION['login']==false){
    header('Location: ./login.php');
}
?>

<h1 name="name" style="display:none;">Profile</h1>
<div class="container">
<div class="profile-container">
    <div class="profile-img-div">
        <img src="./download.jpg" alt="picachu">
    </div>
    <div class="profile-info-div">
        <h2><?php echo $_SESSION['username'];?></h2>
         
    </div>
</div>
</div>
<?php include "./layout/footer.php"; ?> 