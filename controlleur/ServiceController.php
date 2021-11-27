<?php
session_start();
require_once('../model/ServiceModel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_service'])){
    $id='';
    $libelle = $_POST['libelle'];
    $detail = $_POST['detail'];
<<<<<<< HEAD
    $ajout = InsertService($libelle,$detail);
=======
    
     $ajout = InsertService($libelle,$detail);
     
>>>>>>> ae3ddb019a599ba126e48e2c3fa887c5746006ba


}
if(isset($_POST['btn_modifier'])){
    $id=$_POST['id'];
    $libelle = $_POST['libelle'];
    $detail = $_POST['detail'];
     $update = updateService($id,$libelle,$detail);
}