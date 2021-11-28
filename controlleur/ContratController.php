<?php
session_start();
require_once('../model/ContratModel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_contrat'])){

    $nomRes = $_POST['nomRes'];
    $prix = $_POST['prix'];
    $datesign = $_POST['datesign'];
    $typecontrat = $_POST['typecontrat'];
    $etat = $_POST['etat'];

    $ajout = Creat_contrat($nomRes,$prix,$datesign,$typecontrat,$etat);
    

}
if(isset($_POST['btn_modifier'])){
    $id = $_POST['id'];
    $etat = $_POST['etat'];

    $ajout = change_contrat($id,$etat);
    header('../Location/show_contrat.php');
    
}