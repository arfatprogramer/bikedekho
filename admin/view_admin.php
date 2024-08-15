<?php include"./adminlayot/header.php";?>

<!-- backend logic for user page -->
<?php 

include"./databseFiles/conn.php";

$sql="SELECT * FROM users";
$result=$conn->query($sql);
$conn->close();
?>


<!-- Htmal code for user  -->

<div class="container p-5">
  <h1 name="name">View Users</h1>
  <div class="table">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Profile</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Gmail</th>
          <th scope="col">UserName</th>
          <th scope="col">Status</th>
          <th id="option"scope="col">Option</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $trackser=1;
            while ($res=mysqli_fetch_assoc($result)) {
              if($res['user_Type']=='admin'){
                
              
            
        ?>
        <tr>
          <th scope="row"><?php echo $trackser?></th>
          <!-- image div css written in product form css css  -->
          <td><div class="admin_user_image_div"><img  class="profile-img" height="40px" src="../users/<?php echo $res['image']?>"></div></td>
          <td><?php echo $res['first_Name']?></td>
          <td><?php echo $res['last_Name']?></td>
          <td><?php echo $res['phone_Number']?></td>
          <td><?php echo $res['gmail']?></td>
          <td><?php echo $res['username']?></td>
          
          <td><?php
                if($res['active']==1){
                  echo '<span style="background-color: green;" class="status">Active</span>';
                } 
                else{
                  echo '<span style="background-color: red;" class="status">Deactive</span>';
                }
  
              ?>
          </td>
          <td>
          <a href="./user_update.php?ID=<?php echo $res['ID']?>"><button type="button" class="btn btn-primary">Update</button></a>
          <a href="./user_delete.php?ID=<?php echo $res['ID']?>"><button type="button" class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
        <?php $trackser++; }}?>
      
      </tbody>
    </table>
  </div>
</div>
<?php include"./adminlayot/footer.php";?>