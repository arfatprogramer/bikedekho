<?php
// Validate and process form data
$fname=$lname=$phone=$gmail=$pass=$user=$cpass="";

if (isset($_POST['submit'])) {
    // Collect form data
    $firstName = clean_input($_POST["FName"]);
    $lastName = clean_input($_POST["LName"]);
    $username = clean_input($_POST["Uname"]);
    $phoneNumber = clean_input($_POST["Number"]);
    $email = clean_input($_POST["Gmail"]);
    $password = clean_input($_POST["Password"]);
    $confirmPassword = clean_input($_POST["CPassword"]);

    //Data Validation 
    if (empty($firstName)) {
        $fname = "First Name is required";
    }
    if (empty($username)) {
        $user = "Username is required";
    }

    if (empty($lastName)) {
        $lname = "Last Name is required";
    }

    if (empty($phoneNumber)) {
        $phone = "Phone Number is required";
    } elseif (!preg_match("/^\d{10}$/", $phoneNumber)) {
        $phone = "Phone Number should be 10 digits";
    }

    if (empty($email)) {
        $gmail = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $gmail= "Invalid email format";
    }

    if (empty($password)) {
        $pass = "Password is required";
    }

    if (empty($confirmPassword)) {
        $cpass = "Confirm Password is required";
    } elseif ($password !== $confirmPassword) {
        $cpass = "Passwords do not match";
    }

    if(empty($fname) &&empty($lname) &&empty($phone) &&empty($gmail) &&empty($pass) &&empty($user) && isset($cpass))
      {
            include'./database/conn.php';
            $sql = "INSERT INTO users (first_Name, last_Name, phone_Number, gmail, username, password) VALUES ('$firstName', '$lastName', '$phoneNumber','$email','$username', '$password')";
            if ($conn->query($sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
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
<main>

<div class="form-container" id="loginForm">
    <div class="form">
        <form action="<?php $_PHP_SELF ?>" method="post">
            <h1>SignUp form</h1><div class="close"id='close' >X</div>
            <div class="inputbox">
                <label for="FName">First Name:</label>
                <input type="text" name="FName" id="FName">
                <p class="p"><?php echo $fname;?></p>
            </div>
            <div class="inputbox">
                <label for="LName">Last Name:</label>
                <input type="text" name="LName" id="LName">
                <p class="p"><?php echo $lname;?></p>
            </div>
            <div class="inputbox">
                <label for="Number">Phone Number:</label>
                <input type="text" name="Number" id="Number">
                <p class="p"><?php echo $phone;?></p>
            </div>
            <div class="inputbox">
                <label for="Gmail">Gmail:</label>
                <input type="text" name="Gmail" id="Gmail">
                <p class="p"><?php echo $gmail;?></p>
                
            </div>
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
                <label for="CPassword">Conform Password:</label>
                <input type="password" name="CPassword" id="CPassword">
                <p class="p"><?php echo $cpass;?></p>
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



