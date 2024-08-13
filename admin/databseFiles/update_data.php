
<?php include "./conn.php";?>

<?php
    // Get the form data
    $id=$_GET['ID'];
    $breaks = $_POST['breaks'];
    $title = $_POST['title'];
    $engine_cc = $_POST['engine_cc'];
    $max_power = $_POST['max_power'];
    $tank_capacity = $_POST['tank_capacity'];
    $wheelbase = $_POST['wheelbase'];
    $cooling = $_POST['cooling'];
    $max_torque = $_POST['max_torque'];
    $price = $_POST['price'];
    
    $category=$_POST['category'];

    // Image upload
    if($_FILES['image']['error']==4){
        echo"if block";
        $image_new_name=$img=$_GET['image'];;
    }
    else{
        $image = $_FILES['image'];
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
        print_r($_FILES);
        exit;
    }
    }

    // Insert data into the database
    $sql = "UPDATE products SET breaks='$breaks', title='$title', engine_cc=$engine_cc, max_power='$max_power', tank_capacity= $tank_capacity, wheelbase='$wheelbase', cooling='$cooling', max_torque='$max_torque', price='$price', image='$image_new_name',category='$category' WHERE ID=$id";

    $result=$conn->query($sql);

    // Check if the data was updated successfully
    if ($result) {
        header("location: ../view_product.php");

    } else {
        echo 'Error adding product: ' . $conn->error;
    }
  
    // Close the database connection
    $conn->close();
?>