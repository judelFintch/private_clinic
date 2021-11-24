<?php
session_start();
require_once('../model/ServiceModel.php');
require_once('../model/Connexion.php');
require_once('../config/config.php');

if(isset($_POST[''])){

    $nom = $_POST['libelle'];
    $postnom = $_POST['prix_consultation'];
    $prenom = $_POST['type_consultation'];
    $ajout = ServiceModel::insert($libelle, $prix_consultation, $type_consultation, $age, $sexe, $type, $role);

    header("Location:../");

}