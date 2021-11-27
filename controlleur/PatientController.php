<?php
session_start();
require_once('../model/patientsmodel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_patient'])){

    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $presnom = $_POST['presnom'];
    $datenaiss = $_POST['datenaiss'];
    $genre = $_POST['genre'];
    $photo = $_POST['photo'];
    $groupe = $_POST['groupe'];
    $situation = $_POST['situation'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $ajout = InsertPatient($nom,$postnom,$presnom,$datenaiss,$genre,$photo,$groupe,$situation,$tel,$email,$adresse);
    

}

if(isset($_POST['btn_modifier'])){

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['presnom'];
    $datenaiss = $_POST['datenaiss'];
    $genre = $_POST['genre'];
    $photo = $_POST['photo'];
    $groupe = $_POST['groupe'];
    $situation = $_POST['situation'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $ajout = updatePatient($id,$nom,$postnom,$presnom,$datenaiss,$genre,$photo,$groupe,$situation,$tel,$email,$adresse);
    

}