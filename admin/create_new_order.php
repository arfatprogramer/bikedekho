<?php include"./adminlayot/header.php";?>
<div class="container">
 
<form action="./databseFiles/new_order.php" method="post" enctype="multipart/form-data" >
    <div class=" profile-container-out">
        <div class="profile-container">

            <!-- Headding -->
            <div class="profile-heading">
                <h1 style="text-align:center">New Order</h1>
                
            </div>

            <!-- profile-right dive -->
            <div class="profile-right">
                <div class="profile-info-div">
                
                    <div class="pro-input">
                            <label for="first_Name">Customer Full Name</label>
                            <input type="text" name="name" id="name">
                    </div>
                    <div class="pro-input">
                        <label for="image">price</label>
                        <input type="text" name="price" id="price">
                    </div>
                   
                </div>
                
            </div>

            <!-- Profile lef Dive -->
            <div class="profile-left">  
                
            </div>

            <!-- Profile-btn div  -->
            <div class="profile-btn">
                <button class="card-btn" type="submit">Insert new Order</button>
            </div>
        </div>
    </div>
</form>

</div>
<?php include"./adminlayot/footer.php";?>