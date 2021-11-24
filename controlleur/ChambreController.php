<?php
session_start();
require_once('../model/ChambreModel.php');
require_once('../model/Connexion.php');
require_once('../config/config.php');

if(isset($_POST[''])){

    $nom = $_POST['nom_chambre'];
    $postnom = $_POST['nombre_lit'];
    $prenom = $_POST['detail_chambre'];
    $age = $_POST['prix_chambre'];
    $ajout = ChambreModel::insert($nom_chambre, $nombre_lit, $detail_chambre, $prix_chambre);

    header("Location:../");

}