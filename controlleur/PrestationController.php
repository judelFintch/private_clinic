<?php
session_start();
require_once('../model/PrestationModel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_prestation'])){
    $id='';
    $libellepresstation = $_POST['libelleprestation'];
    $prix = $_POST['prix'];
    $nomservice = $_POST['nomservice'];
    $detail = $_POST['detail'];

    
     $ajout = InsertPrestation($libellepresstation,$prix,$nomservice,$detail);
     var_dump(selectPrestation());

    // header("Location:../");

}