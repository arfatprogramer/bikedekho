<?php

// Validate and process form data
$pass=$user="";
// echo"<pre>";
// print_r($GLOBALS);
// echo"</pre>";


if (isset($_POST['submit'])) {
    // Collect form data
    $username = clean_input($_POST["Uname"]);
    $password = clean_input($_POST["Password"]);
    $user1="admin";
    $pass1="admin123";
    if($username===$user1 && $password===$pass1){
        session_start();
        // $_SESSION['login']=true;
        header("location:./admin/");

    }
    else{
        
        echo"<script type'JavaScritp'>alert('Invalid Ussername And Password')</script>";
    }
    
    //Data Validation 
  
    if (empty($username)) {
        $user = "Username is required";
    }

    if (empty($password)) {
        $pass = "Password is required";
    }
    
} 

// Function to sanitize input
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<?php include"./layout/header.php"?>
<main>

<div class="form-container" id="loginForm">
    <div class="form">
        <form action="<?php $_PHP_SELF ?>" method="post">
            <h1>Admin panel</h1><div class="close"id='close' >X</div>
            <div class="inputbox">
                <label for="Uname">Username:</label>
                <input type="text" name="Uname" id="Uname">
                <p class="p"><?php echo $user;?></p>
            </div>
            <div class="inputbox">
                <label for="Password">Password:</label>
                <input type="password" name="Password" id="Password">
                <p class="p"><?php echo $pass;?></p>
            </div>
            <div class="inputbox">
                <input type="submit" name="submit" id="submit">
                 <!-- <button type="submit" ></button> -->
            </div>
        </form>
    </div>
</div> 
<div class="home-container">
    <div class="home-text">
    <div class="clock">
        <h1> 30 : 30 : 30 : 30 </h1>
        <pre>Hours    Minnuts   Seconds  Mili-second </pre>
    </div>
    <div class="home-text-heading">
        <h1>Lunching New Bike</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint laborum sequi fugiat nostrum molestias aspernatur</p>
        <button class="home-btn">Know More</button>
        <button class="home-btn">Know More</button>
    </div>

       
    </div>
    <div class="home-image">
        <img class="home-img" src="./Images/ktm.png" alt="img">
    </div>
   
</div>
<script type="text/JavaScript">
let close = document.getElementById("close");

var el = document.getElementById("loginForm");
// console.log(el);

close.addEventListener("click",function(){
    
    el.style.display="none";
    
});
</script>
</main>
<?php include "./layout/footer.php"; ?> 



   

