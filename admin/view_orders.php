<?php include"./adminlayot/header.php";?>

<!-- backend logic for user page -->
<?php 

include"./databseFiles/conn.php";

$sql="SELECT * FROM orders";
$order=$conn->query($sql);
$conn->close();

?>


<!-- Htmal code for user  -->

<div class="container p-5">
<h1 name="name">View Orders</h1>
  <div class="table">
  <table class="table table-striped">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Order Date</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <?php while($res=mysqli_fetch_assoc($order)){?>
              <tr>
                <td><?php echo $res['ID'];?></td>
                <td><?php echo $res['customer_name']?></td>
                <td><?php echo $res['order_date']?></td>
                <td><?php echo number_format($res['amount'])?></td>
              </tr>
              <?php }?>
            </tbody>
          </table>
  </div>
</div>
<?php include"./adminlayot/footer.php";?>