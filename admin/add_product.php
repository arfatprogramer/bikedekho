<?php include "./adminlayot/header.php"; ?>
<div class="form-container">
  <div class="heading"><h1 name="name" class="form-heading">Add Product</h1></div>

  <form action="./databseFiles/insert_product.php" method="post" enctype="multipart/form-data">
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
      <div class="p-input">
        <label for="category">Category</label>
        <input type="text" id="category" name="category">
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
        <img id="image-preview" src="" height="220px"  >
        <h1>No image </h1>
      </div> 
    
      <div class="p-input">
        <button class="btn-form" style="--color:rgb(53, 185, 53);--hover-color:rgb(26, 161, 26);" type="submit" >Insert Record</button>
        <!-- <button class="btn-form" style="--color:red;--hover-color:#e42020;">Delete Record</button> -->
      </div>
    </div>
    
  </div>
</form>
<a href="./view_product.php"><button class="btn-form" style="--color:#207fe4;--hover-color:#1d72cd ;">View Records</button></a>
</div>

<!-- images preview  -->
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


