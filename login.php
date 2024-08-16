<?php
include'./database/conn.php';
// Validate and process form data
$pass=$user="";
// echo"<pre>";
// print_r($GLOBALS);
// echo"</pre>";


if (isset($_POST['submit'])) {
    // Collect form data
    $username = clean_input($_POST["Uname"]);
    $password = clean_input($_POST["Password"]);

    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
       if($row['user_Type']=='user'){
        session_start();
        $_SESSION['login']=true;
        $_SESSION['username']=$row['first_Name'];
        $_SESSION['ID']=$row['ID'];
        $_SESSION['error']="Wellcom ".$row['first_Name'];
        $_SESSION['btn-color']="danger";

        
        header("location:./");
       }
       elseif($row['user_Type']=='admin'){
        session_start();
        $_SESSION['admin']=true;
        $_SESSION['username']=$row['first_Name'];
        header("location:./admin/");
       }

    } else{
        // Display error message if username and password are incorrect
        // session_start();
        $_SESSION['error'] = "Invalid username or password";
        $_SESSION['btn-color'] = "danger";
           
            
    }   
    
    //Data Validation 
  
    if (!empty($username)) {
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
$conn->close();
?>
<?php include"./layout/header.php"?>
<!-- <h1 name="name" style="display:none;">Login</h1> -->
<main>

<div class="form-container" id="loginForm">
    <div class="form">
        
        <form action="<?php $_PHP_SELF ?>" method="post">
            <h1>Login</h1><div class="close" id='close' >X</div>
            <div class="inputbox">
                <label for="Uname">Username</label>
                <input type="text" name="Uname" id="Uname">
                <p class="p"><?php echo $user;?></p>
            </div>
            <div class="inputbox">
                <label for="Password">Password</label>
                <input type="password" name="Password" id="Password">
                <p class="p"><?php echo $pass;?></p>
            </div>
            <div class="inputbox">
                <h3>Do not have an ACcount? <a href="./signup.php"><span style="color:red;font-size:18px">Click here</span></a></h3>
                
            </div>
            <div class="inputbox">
                <input type="submit" name="submit" id="submit">
                 
            </div>
        </form>
    </div>
</div> 
<?php include "./home.php";?>
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



   

