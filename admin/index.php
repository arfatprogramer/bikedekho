<?php include './adminlayot/header.php'?>

<?php 
include './databseFiles/conn.php';
$sql="SELECT * FROM products ORDER BY ID DESC LIMIT 5;";
$result=$conn->query($sql);

$sql="SELECT * FROM orders ORDER BY ID DESC LIMIT 5";
$order=$conn->query($sql);

$sql="SELECT count(*) FROM products";
$total_product=$conn->query($sql);
$total_product=$total_product->fetch_assoc();

$sql= "SELECT count(ID) FROM users WHERE user_Type='user'";
$total_user=$conn->query($sql);
$total_user=$total_user->fetch_assoc();

$sql= "SELECT count(ID) FROM orders";
$total_orders=$conn->query($sql);
$total_orders=$total_orders->fetch_assoc();

$sql= "SELECT SUM(amount) AS total_revanu FROM orders;";
$total_revenu=$conn->query($sql);
$total_revenu=$total_revenu->fetch_assoc();

?>

<div class="container">
  <h1 name="name">Dashboard</h1>
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Users</h5>
          <p class="card-text"><?php echo $total_user['count(ID)']?></p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Orders</h5>
          <p class="card-text"><?php echo number_format($total_orders['count(ID)'])?></p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Revenue</h5>
          <p class="card-text"><?php echo number_format($total_revenu['total_revanu'])?></p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Products</h5>
          <p class="card-text"><?php  echo $total_product['count(*)']?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Recent Orders</h5>
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
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Recent Products</h5>
          <table class="table table-striped">
            <thead>
              <tr>
                <th> ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
            <?php while($res=mysqli_fetch_assoc($result)){?>
              <tr>
                <td><?php echo $res['ID'];?></td>
                <td><?php echo $res['title'];?></td>
                <td><?php echo $res['category'];?></td>
                <td><?php echo $res['price'];?></td>
              </tr> 
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include"./adminlayot/footer.php";?>