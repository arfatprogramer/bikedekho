<?php include"./adminlayot/header.php";?>

<?php 
include './databseFiles/conn.php';
$sql="SELECT ID,title FROM products";
$result=mysqli_query($conn,$sql);
// while($res=mysqli_fetch_assoc($result)){
//     echo $res['title'];
// }



if(isset($_POST['submit'])){
    $title=$_POST['title'];

    $sql="UPDATE home_page SET title='$title'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:./");
    }
}

?>

<div class="container">
 
<form action="<?php $_SELF_?>" method="post" enctype="multipart/form-data" >
    <div class=" profile-container-out">
        <div class="profile-container">

            <!-- Headding -->
            <div class="profile-heading">
                <h1 style="text-align:center">Home Page</h1>
            </div>
                    <div class="pro-input">
                            <label for="first_Name">Chose the bike for home page</label>
                            <select name="title" class="form-select" aria-label="Default select example">
                                <option  selected>Open this select menu</option>
                                <?php while($res=mysqli_fetch_assoc($result)){
                            
                                echo "<option  value=". $res['ID'].">". $res['title']."</option>";
                                }?>
                               
                            </select>
        
                    </div>
            <!-- Profile-btn div  -->
            <div class="profile-btn">
                <button class="card-btn" name="submit" type="submit">Insert new Order</button>
            </div>
        </div>
    </div>
</form>

</div>
<?php include"./adminlayot/footer.php";?>