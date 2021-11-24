<?php
require_once('../model/patientsmodel');
require_once('../config/config.php');
require_once('../model/Connexion');

if(isset($_POST[''])){

    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $ajout = patientsmodel::insert($nom, $postnom, $prenom, $age, $sexe, $date, $heure);

    header("Location:../");

}