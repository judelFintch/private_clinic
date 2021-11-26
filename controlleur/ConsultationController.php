<?php
session_start();
require_once('../model/ConsultationeModel.php');
require_once('../model/Connexion.php');
require_once('../config/config.php');

if(isset($_POST[''])){

    $code = $_POST['code_patient'];
    $etat = $_POST['etat'];
    $code_medecin = $_POST['code_medecin'];
    $ajout = ConsultationModel::insert($code_patient, $etat, $code_medecin);

    header("Location:../");

}