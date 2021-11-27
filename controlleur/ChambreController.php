<?php
session_start();
require_once('../model/ChambreModel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_chambre'])){
    $codeChambre = $_POST['codeChambre'];
    $typechambre = $_POST['typechambre'];
    $prix = $_POST['prix'];
    $detail = $_POST['detail'];
    $creat_room = Creat_room($codeChambre, $typechambre, $prix, $detail);
}