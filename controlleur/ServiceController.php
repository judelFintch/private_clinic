<?php
session_start();
require_once('../model/ServiceModel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_service'])){
    $id='';
    $libelle = $_POST['libelle'];
    $detail = $_POST['detail'];
    $service_prix=$_POST['service_prix'];
    $ajout = InsertService($libelle,$detail,$service_prix);
    if($ajout){
    header("refresh: 0; ../index.php?operation=creat_service&&codep=success");
       }
       else{
         header("refresh: 0; ../index.php?operation=error");
       }

}
if(isset($_POST['btn_modifier'])){
    $id=$_POST['id'];
    $libelle = $_POST['libelle'];
    $detail = $_POST['detail'];
    $prix = $_POST['prix'];

     $update = updateService($id,$libelle,$detail,$prix);
     if($update){
      header("refresh: 0; ../pages/show_service.php");
         }
         else{
           header("refresh: 0; ../index.php?operation=error");
         }
}