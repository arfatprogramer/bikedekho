<?php include"./adminlayot/header.php";?>

<!-- backend logic for user page -->
<?php 

include"./databseFiles/conn.php";

$sql="SELECT * FROM Products";
$result=$conn->query($sql);
$conn->close();

?>


<!-- Htmal code for user  -->

<div class="container p-5">
<h1 name="name">View Product</h1>
  <div class="table">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
          <th scope="col">Tital</th>
          <th scope="col">Price</th>
          <th scope="col">Category</th>
          <th id="option"scope="col">Option</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $trackser=1;
            while ($res=mysqli_fetch_assoc($result)) {
            
        ?>
        <tr>
          <th scope="row"><?php echo $trackser?></th>
          <td><img height="100px" src="../images/<?php echo $res['image']?>" alt="Image"></td>
          <td><?php echo $res['title']?></td>
          <td><?php echo "Rs ".$res['price']?></td>
          <td><?php echo $res['category']?></td>
          <td>
          <a href="./update.php?ID=<?php echo $res['ID']?>"><button type="button" class="btn btn-primary">Update</button></a>
          <a href="./delete.php?ID=<?php echo $res['ID']?>"><button type="button" class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
        <?php $trackser++; }?>
      
      </tbody>
    </table>
  </div>
</div>
<?php include"./adminlayot/footer.php";?>