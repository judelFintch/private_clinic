<?php
session_start();
require_once('../model/AgentModel.php');
require_once('../confg/Connexion.php');
if(isset($_POST['btn_agent'])){
   
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $datenaiss = $_POST['datenaiss'];
    $genre = $_POST['genre'];
    $nomentrep = $_POST['nomentrep'];
    $matricule = $_POST['matricule'];
   
    $groupe = $_POST['groupe'];
    $situation = $_POST['situation'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $ajout = InsertAgent($nom,$postnom,$prenom,$datenaiss,$genre,$nomentrep,$matricule,$$groupe,$situation,$tel,$email,$adresse);
    

}

if(isset($_POST['btn_modifier'])){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $presnom = $_POST['prenom'];
    $datenaiss = $_POST['datenaiss'];
    $genre = $_POST['genre'];
    $nomentrep = $_POST['nomentrep'];
    $matricule = $_POST['matricule'];
    $photo = $_POST['photo'];
    $groupe = $_POST['groupe'];
    $situation = $_POST['situation'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $ajout = updateAgent($nom,$postnom,$prenom,$datenaiss,$genre,$nomentrep,$matricule,$photo,$groupe,$situation,$tel,$email,$adresse);
    

}