<?php

    include "./databseFiles/conn.php";
    $id = $_GET['ID'];
    $sql = "DELETE  FROM users WHERE ID=$id";

    $result =$conn->query($sql);
    if($result){
        header("location:./view_Users.php");
    }else{
        echo "Error";
    }


?>