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
  <link rel="stylesheet" href="admin.css">
  <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
  <aside class="aside">
    <div class="logo"><div class="logo-div"><img class="logo" src="../layout/logo.png" ></div></div>
    <ul class="aside-ul">
     <a class="aside-a" href="dashboard.php"><li class="aside-li ad-active">Dashboard</li></a>
     <a class="aside-a" href="add_product.php"><li class="aside-li">Add Product</li></a>
    
      <a class="aside-a" href="view_product.php"><li class="aside-li">View Product</li></a>
      <a class="aside-a" href="view_Users .php"><li class="aside-li">View Users</li></a>
    
     <li class="aside-logout">
      <img src="./download.jpg" class="profile-img">
      <span class="profile-name"><?php echo$_SESSION['username'];?></span>
      <a href="./logout.php" class="logout"><i class="fa-solid fa-right-from-bracket"></i></a>
     </li>
  
    </ul>
    
  </aside>
  <div class="main">
    <div class="container">
    <h1>Dashbord</h1>

    </div>

  </div>
</body>
</html>






<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  Boxiocns CDN Link
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   Bootstrap CSS
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      place logo in this dive
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">MOtoGT</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
        <i class="fa-regular fa-grid-2"style="color: #ffffff;"></i>
          <span class="link_name">Dashboard</span>
        </a>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection'></i>
            <span class="link_name">Product</span>
          </a>
        </div>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class="fa-solid fa-users" style="color: #ffffff;"></i>
            <span class="link_name">Users</span>
          </a>
        </div>
      </li>
      <li>
        <a href="#">
        <i class="fa-solid fa-gear"></i>
          <span class="link_name">Setting</span>
        </a>
      </li>
      admin detail and logout
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="./download.jpg" alt="profileImg">
          </div>
          <a href="./out.php">
          <div class="name-job">
            <div class="profile_name">Prem Shahi</div>
            <div class="job">Web Desginer</div>
          </div>
          <i class='bx bx-log-out'></i>
        </div>
          </a>
      </li>
    </ul>
  </div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <i class="fa-solid fa-bars"></i>
      <span class="text">Dashboard</span>
    </div>
    <div class="container">
      <h1>hello user</h1>
      <h2>jfhudsahfduofhd</h2>

    </div>
  </section>


  <div class="one"></div>

  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".fa-bars");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>
  Option 1: Bootstrap Bundle with Popper
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html> -->