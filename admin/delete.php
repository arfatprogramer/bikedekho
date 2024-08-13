<?php

    include "./databseFiles/conn.php";
    $id = $_GET['ID'];
    $sql = "DELETE  FROM products WHERE ID=$id";

    $result =$conn->query($sql);
    if($result){
        header("location:./view_product.php");
    }else{
        echo "Error";
    }


?>