<?php
try{
$conn=mysqli_connect("localhost","root","","bikedekho");
}
catch (Exception $e ){
    echo "Database conncetion problem id :- ".$e->getMessage();
}

?>