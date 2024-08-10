<?php 
session_start();
if(isset($_SESSION['login'])){

}else{
    $_SESSION['login']=false;
}
?>