<?php
session_start();
require_once('../model/UserModel');
require_once('../model/Connexion.php');
require_once('../config/config.php');

if(isset($_POST[''])){

    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $date = $_POST['type'];
    $heure = $_POST['role'];
    $ajout = UserModel::insert($nom, $postnom, $prenom, $age, $sexe);

    header("Location:../");
}