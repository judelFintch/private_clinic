 <!-- Required meta tags -->
 <!DOCTYPE html>
<html lang="en">
<head>
<?php 
  session_start();
   if(isset($_SESSION['login']) AND isset($_SESSION['level'])){
          //$rech = $_GET['class'];
         echo $level=$_SESSION['level'];
          $user=$_SESSION['user'];
     }
   else{
   header("Location:../Auth/login.php");}
?>
 <meta charset="utf-8">
 <?php include('../env.php')?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=$logiciel_name?></title>
  <!-- plugins:css -->
  <link href="../jquery/jquery-ui.css" rel="stylesheet">
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="../css/vertical-layout-light/smart_tab_all.min.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>
<script  src="../js/jquery-2.1.3.min.js"> </script>
<script src="../jquery/jquery-ui.js"></script>