<?php
session_start();
if(isset($_SESSION['login'])){
    header("refresh: 0; pages/default.php");
}
else{
    header("refresh: 0; auth/login.php");
}


