<?php
// Configuration
include"./conn.php";

// Get the form data
$category = $_POST['category'];
$title = $_POST['title'];
$engine_cc = $_POST['engine_cc'];
$max_power = $_POST['max_power'];
$tank_capacity = $_POST['tank_capacity'];
$wheelbase = $_POST['wheelbase'];
$cooling = $_POST['cooling'];
$max_torque = $_POST['max_torque'];
$price = $_POST['price'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

echo"<pre>";
print_r($image);


// Insert the data into the database
$sql = "INSERT INTO products (category, title, engine_cc, max_power, tank_capacity, wheelbase, cooling, max_torque, price, image)
VALUES ('$category', '$title', '$engine_cc', '$max_power', '$tank_capacity', '$wheelbase', '$cooling', '$max_torque', '$price', '$image')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Upload the image to the server
move_uploaded_file($image_tmp, "uploads/" . $image);

// Close the database connection
$conn->close();
?>