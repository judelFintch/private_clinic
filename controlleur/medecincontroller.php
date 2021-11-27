<?php

require_once('../model/medecinmodel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['btn_enregistrer'])){

    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $datenaiss = $_POST['datenaiss'];
    $genre = $_POST['genre'];
    $photo = $_POST['photo'];
    $typemedecin = $_POST['typemedecin'];
    $role = $_POST['role'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $ajout = InsertMedecin($nom,$postnom,$prenom,$datenaiss,$genre,$photo,$typemedecin,$role,$tel,$email,$adresse);
    

}
if(isset($_GET['btn_modifier'])){

    $id='';
    $nom = $_GET['nom'];
    $postnom = $_GET['postnom'];
    $prenom = $_GET['prenom'];
    $datenaiss = $_GET['datenaiss'];
    $genre = $_GET['genre'];
    $photo = $_GET['photo'];
    $typemedecin = $_GET['typemedecin'];
    $role = $_GET['role'];
    $tel = $_GET['tel'];
    $email = $_GET['email'];
    $adresse = $_GET['adresse'];

    $ajout = updateMedecin($nom,$postnom,$prenom,$datenaiss,$genre,$photo,$typemedecin,$role,$tel,$email,$adresse);
}