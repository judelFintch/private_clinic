<?php
include('../model/UserModel');
if(isset($_POST[''])){

    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $date = $_POST['type'];
    $heure = $_POST['role'];
    $ajout = patientsmodel::insert($nom, $postnom, $prenom, $age, $sexe);

    header("Location:../");
}