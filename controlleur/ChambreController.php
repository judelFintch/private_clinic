<?php
session_start();
require_once('../model/ChambreModel.php');
require_once('../model/Connexion.php');
require_once('../confg/config.php');

if(isset($_POST['btn_chambre'])){

    $codeChambre = $_POST['codeChambre'];
    $typechambre = $_POST['typechambre'];
    $prix = $_POST['prix'];
    $detail = $_POST['detail'];
    $ajout = InsertChambre($codeChambre, $typechambre, $prix, $detail);


}