
<?php include "./conn.php";?>

<?php
    // Get the form data
    $breaks = $_POST['breaks'];
    $title = $_POST['title'];
    $engine_cc = $_POST['engine_cc'];
    $max_power = $_POST['max_power'];
    $tank_capacity = $_POST['tank_capacity'];
    $wheelbase = $_POST['wheelbase'];
    $cooling = $_POST['cooling'];
    $max_torque = $_POST['max_torque'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $category=$_POST['category'];

    // Image upload
    $image_name = $image['name'];
    $image_tmp_name = $image['tmp_name'];
    $image_size = $image['size'];
    $image_error = $image['error'];

    if ($image_error === 0) {
        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
        $image_new_name = uniqid('', true) . '.' . $image_ext;
        $image_upload_path = '../../images/' . $image_new_name;
        move_uploaded_file($image_tmp_name, $image_upload_path);
    } else {
        echo 'Error uploading image: ' . $image_error;
        exit;
    }

    // Insert data into the database
    $sql = "INSERT INTO products (breaks, title, engine_cc, max_power, tank_capacity, wheelbase, cooling, max_torque, price, image,category) VALUES ( '$breaks', '$title', $engine_cc, '$max_power', $tank_capacity, '$wheelbase', '$cooling', '$max_torque', '$price', '$image_new_name','$category')";
    
    $result=$conn->query($sql);

    // Check if the data was inserted successfully
    if ($result) {
        header("location: ../add_product.php");

    } else {
        echo 'Error adding product: ' . $conn->error;
    }
  
    // Close the database connection
    $conn->close();
?>