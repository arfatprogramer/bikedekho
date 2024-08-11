<?php 
if(!session_start()){
    session_start();
}
if(isset($_SESSION['login'])){

}else{
    $_SESSION['login']=false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/product_view_page.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body>

    <header id="header">


    <nav>
    <div class="nav-logo"><div class="logo-div"><img class="logo" src="./layout/logo.png" ></div></div>
    <div class="nav-list">
        <ul class="ul-menu">
        <a class="a" href="./"><li class="nav-li ">Home</li></a>
        <a class="a" href="./product_view_page.php"><li class="nav-li">Product</li></a>
        <a class="a" href="./About.php"><li class="nav-li">About</li></a>
        <a class="a" href="./ContactUs.php"><li class="nav-li">ContactUs</li></a>

        <?php 
        
        if($_SESSION['login']===true){
            echo" <div class='dropdown'>
                     <button class='nav-btn'>".$_SESSION['username']."</button>
                     <div class='dropdown-content'>
                        <a href='./profile.php'><li >Profile</li></a>
                        
                        <a href='./logout.php'><li>Loout</li></a>
                     </div>
                </div>";
            
        }
        else{
            echo'  <a href="./login.php"><li ><button class="nav-btn">Login</button></li></a>';
        }
       

        ?>
        
        </ul>
        
    </div>

    <script type="text/JavaScript">
        let header=document.getElementById("header");
        window.onscroll=function(params) {
            if (document.documentElement.scrollTop > 20) {
                header.style. position= 'fixed';
                
            }else{
                header.style.position='relative';
            }
            
        }

    </script>

    </header>