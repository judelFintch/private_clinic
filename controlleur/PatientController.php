<?php
session_start();
require_once('../model/patientsmodel.php');
require_once('../model/Connexion.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_patient'])){

    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $datenaiss = $_POST['datenaiss'];
    $genre = $_POST['genre'];
    $photo = $_POST['photo'];
    $groupe_sanguin = $_POST['groupe_sanguin'];
    $situation_m = $_POST['situation_fa'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $ajout = InsertPatient($nom,$postnom,$prenom,$datenaiss,$genre,$photo,$typemedecin,$role,$tel,$email,$adresse);
    

}