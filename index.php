<?php
session_start();
if(isset($_SESSION['login'])){
    if(isset($_GET['operation'])){
        switch ($_GET['operation']) {
            case "beb_creat":
                header("refresh: 0; pages/creat_bed.php?op=success");
                break;
            case "creat_patient":
                header("refresh: 0; pages/first_op.php?op=success");
                break;
            case "cake":
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
