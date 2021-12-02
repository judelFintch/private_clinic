<?php
session_start();
require_once('../model/PatientAbonneModel.php');
require_once('../confg/Connexion.php');
if(isset($_POST['btn_patient'])){
    // echo $patient_code=$_POST['patient'];
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $datenaiss = $_POST['datenaiss'];
    $genre = $_POST['genre'];
    $nomentrp = $_POST['nomentrp'];
    $matricule = $_POST['matricule'];
    $groupe = $_POST['groupe'];
    $situation = $_POST['situation'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $ajout = InsertPatientAbonne($nom,$postnom,$prenom,$datenaiss,$genre,$nomentrp,$matricule,$groupe,$situation,$tel,$email,$adresse);
    

}

if(isset($_POST['btn_modifier'])){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $presnom = $_POST['presnom'];
    $datenaiss = $_POST['datenaiss'];
    $genre = $_POST['genre'];
    $nomentrp = $_POST['nomentrp'];
    $matricule = $_POST['matricule'];
    $groupe = $_POST['groupe'];
    $situation = $_POST['situation'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $ajout = updatePatientAbonne($id,$nom,$postnom,$presnom,$datenaiss,$genre,$nomentrp,$matricule,$groupe,$situation,$tel,$email,$adresse);
    

}