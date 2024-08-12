<?php
if(!session_start()){
  session_start();
}
if( $_SESSION['admin']==false){
  header('location:../');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  
  <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   <link rel="stylesheet" href="admin.css">
   <link rel="stylesheet" href="table.css">
   <link rel="stylesheet" href="product-form.css">
</head>
<body>
  <aside class="aside">
    <div class="logo"><div class="logo-div"><img class="logo" src="./logo.png" ></div></div>
    <ul class="aside-ul">
     <a class="aside-a" href="./"><li class="aside-li">Dashboard</li></a>
     <a class="aside-a" href="add_product.php"><li class="aside-li">Add Product</li></a>
    
      <a class="aside-a" href="view_product.php"><li class="aside-li">View Product</li></a>
      <a class="aside-a" href="view_Users.php"><li class="aside-li">View Users</li></a>
    
     <li class="aside-logout">
      <img src="./download.jpg" class="profile-img">
      <span class="profile-name"><?php echo$_SESSION['username'];?></span>
      <a href="./logout.php" class="logout"><i class="fa-solid fa-right-from-bracket"></i></a>
     </li>
  
    </ul>
    
  </aside>
  <div class="main">