<?php
session_start();
require_once('App/filter_var.php');
if(isset($_SESSION['login'])){
    if(isset($_GET['operation'])){
        switch ($_GET['operation']) {
            case "beb_creat":
                header("refresh: 0; pages/creat_bed.php?op=success");
                break;
            case "creat_patient":
                if(isset($_GET['codep'])){
                    $code_op=$_GET['codep'];
                    header("refresh: 0; pages/first_op.php?code=$code_op");
                }
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
