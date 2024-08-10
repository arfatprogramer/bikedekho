<?php include"./layout/header.php";

if($_SESSION['login']==false){
    header('Location: ./login.php');
}
?>


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