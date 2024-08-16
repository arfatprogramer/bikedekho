<?php 
include "./conn.php";
$name=$_POST['name'];
$price=$_POST['price'];

$sql="INSERT INTO orders(customer_name,amount) VALUES('$name', $price)";
$result=mysqli_query($conn,$sql);
if ($result) {
    header("location:../view_orders.php");
}
?>