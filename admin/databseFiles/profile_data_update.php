<?php 
echo"<pre>";
print_r($_POST);
$id=$_GET['ID'];
$firstName=$_POST['first_Name'];
$lastName=$_POST['last_Name'];
$username=$_POST['username'];
$phoneNumber=$_POST['phone_Number'];
$gmail=$_POST['gmail'];

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
        $image_upload_path = '../users/' . $image_new_name;
        move_uploaded_file($image_tmp_name, $image_upload_path);
    } else {
        echo 'Error uploading image: ' . $image_error;
        print_r($_FILES);
        exit;
    }
}

include "./conn.php";
$sql="UPDATE users SET first_Name='$firstName', last_Name='$lastName', username='$username', phone_Number='$phoneNumber', image='$image_new_name' WHERE ID=$id";

echo $sql;
$result=$conn->query($sql);
header("location:../view_users.php")
?>