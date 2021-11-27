<?php
session_start();
require_once('../model/ConsultationeModel.php');
require_once('../config/Connexion.php');

if(isset($_POST['consultation'])){

    $code = $_POST['code_patient'];
    $etat = $_POST['etat'];
    $code_medecin = $_POST['code_medecin'];

}