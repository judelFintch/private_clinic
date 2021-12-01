<?php
session_start();
require_once('../model/AbonneModel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_abonne'])){

    $libelle = $_POST['libelle'];
    $nomRes = $_POST['nomRes'];
    $rccm = $_POST['rccm'];
    $idnat = $_POST['idnat'];
    $adresse = $_POST['adresse'];
    $typeabonne = $_POST['typeabonne'];

    $ajout = Creat_abonne($libelle,$nomRes,$rccm,$idnat,$adresse,$typeabonne);
    

}