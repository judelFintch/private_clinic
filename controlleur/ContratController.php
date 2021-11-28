<?php
session_start();
require_once('../model/AbonneModel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_contrat'])){

    $nomRes = $_POST['nomRes'];
    $prix = $_POST['prix'];
    $datesign = $_POST['datesign'];
    $typecontrat = $_POST['typecontrat'];
    $etat = $_POST['etat'];

    $ajout = InsertContrat($nomRes,$prix,$datesign,$typecontrat,$etat);
    

}