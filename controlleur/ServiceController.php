<?php
session_start();
require_once('../model/ServiceModel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_service'])){
    $id='';
    $libelle = $_POST['libelle'];
    $detail = $_POST['detail'];
    $ajout = InsertService($libelle,$detail);

}
if(isset($_POST['btn_modifier'])){
    $id=$_POST['id'];
    $libelle = $_POST['libelle'];
    $detail = $_POST['detail'];
    
     $update = updateService($id,$libelle,$detail);
}