<?php
session_start();
require_once('../model/patientsmodel.php');
require_once('../confg/Connexion.php');
if(isset($_POST['btn_patient'])){
    echo $patient_code=$_POST['patient'];
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $datenaiss = $_POST['datenaiss'];
    $genre = $_POST['genre'];
    //$photo = $_POST['photo'];
    //$groupe = $_POST['groupe'];
    $situation = $_POST['situation'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $service=$_POST['serv_id'];
    $creat_patient = InsertPatient($patient_code,$nom,$postnom,$prenom,$datenaiss,$genre,$situation,$tel,$email,$adresse,$service);
    if($creat_patient==1){
        header("refresh: 0; ../index.php");
       }
       else{
          header("refresh: 0; ../index.php?operation=error");
       }
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
    $ajout = updatePatient($id,$nom,$postnom,$prenom,$datenaiss,$genre,$photo,$groupe,$situation,$tel,$email,$adresse);
    

}