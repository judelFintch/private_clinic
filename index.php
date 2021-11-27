<?php
session_start();
if(isset($_SESSION['login'])){
    if(isset($_GET['operation'])){
        if($_GET['operation']=='beb_creat'){
            header("refresh: 0; pages/creat_bed.php?op=success");
        }
        else{
            header("refresh: 0; pages/creat_bed.php?op=error");
        }
        }
        else{
            header("refresh: 0; pages/default.php");
        }
        }
        else{
            header("refresh: 0; auth/login.php");
        }
