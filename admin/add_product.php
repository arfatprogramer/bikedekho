<?php include "./adminlayot/header.php"; ?>
<div class="form-container">
  <div class="heading"><h1 name="name" class="form-heading">Add Product</h1></div>

  <form action="./databseFiles/insert_product.php" method="post"></form>
  <div class="product-form">
    <div class="left">

      <div class="p-input">
        <label for="breaks">Breaks</label>
        <input type="text" id="breaks" name="breaks">
      </div>
      <div class="p-input">
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
      </div>
      <div class="p-input">
        <label for="engine_cc">Engine Cc</label>
        <input type="text" id="engine_cc" name="engine_cc">
      </div>
      <div class="p-input">
        <label for="max_power">Max Power</label>
        <input type="text" id="max_power" name="max_power">
      </div>
      <div class="p-input">
        <label for="tank_capacity">Tank Capacity</label>
        <input type="text" id="tank_capacity" name="tank_capacity">
      </div>
      <div class="p-input">
        <label for="wheelbase">Wheelbase</label>
        <input type="text" id="wheelbase" name="wheelbase">
      </div>
      <div class="p-input">
        <label for="cooling">Cooling</label>
        <input type="text" id="cooling" name="cooling">
      </div>

    </div>
    <div class="left">
     
      <div class="p-input">
        <label for="max_torque">Max Torque</label>
        <input type="text" id="max_torque" name="max_torque">
      </div>
      <div class="p-input">
        <label for="price">Price</label>
        <input type="text" id="price" name="price">
      </div>
      <div class="p-input">
        <label for="image">Image</label>
        <!-- <input type="file" id="image" name="image"> -->
        <input type="file" id="image" name="image" onchange="previewImage(this)">
      </div>
      <div class="image-pre">
        <img id="image-preview" src="" height="178px"  >
        <h1>No image </h1>
      </div> 
    
      <div class="p-input">
        <input style="--color:rgb(53, 185, 53);--hover-color:rgb(26, 161, 26);" type="submit" value="Insert Record ">
        <!-- <button class="btn-form" style="--color:red;--hover-color:#e42020;">Delete Record</button> -->
        <a href="./view_product.php"><button class="btn-form" style="--color:#207fe4;--hover-color:#1d72cd ;">View Records</button></a>
      </div>
    </div>

  </div>
  </form>
</div>

<!-- black Bos AI  -->
<script>
  function previewImage(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('image-preview').src = e.target.result;
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<?php include "./adminlayot/footer.php"; ?>



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

// Image upload
$image_name = $image['name'];
$image_tmp_name = $image['tmp_name'];
$image_size = $image['size'];
$image_error = $image['error'];

if ($image_error === 0) {
    $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
    $image_new_name = uniqid('', true) . '.' . $image_ext;
    $image_upload_path = './uploads/' . $image_new_name;
    move_uploaded_file($image_tmp_name, $image_upload_path);
} else {
    echo 'Error uploading image: ' . $image_error;
    exit;
}

// Insert data into the database
$sql = "INSERT INTO products (breaks, title, engine_cc, max_power, tank_capacity, wheelbase, cooling, max_torque, price, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $breaks, $title, $engine_cc, $max_power, $tank_capacity, $wheelbase, $cooling, $max_torque, $price, $image_new_name);
$stmt->execute();

// Check if the data was inserted successfully
if ($stmt->affected_rows === 1) {
    echo 'Product added successfully!';
} else {
    echo 'Error adding product: ' . $conn->error;
}

// Close the database connection
$conn->close();
?>