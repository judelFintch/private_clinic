<?php
require_once('../model/HospitalisationModel.php');
require_once('../confg/Connexion.php');

if(isset($_POST['savehospi'])){

    $patient= $_POST['patient'];
    $medecintr = $_POST['medecin_trait'];
    $motifhosp = $_POST['motif_hospitalisation'];
    $datehosp = $_POST['date_hospitalisation'];
    $hosptby = $_POST['serv_id'];
    $note =$_POST['note'];
    $chambre =$_POST['chambre_id'];
    $lit =$_POST['lit_id'];
    $opeartion=insertHospitalistion($patient, $medecintr, $motifhosp, $datehosp, $hosptby, $note, $chambre, $lit);
     if($opeartion==true){
        header("refresh: 0; ../pages/show_hospitalisation.php");
     }
     else{
     }
   
}
elseif (isset($_POST['updatehospi'])) {
    $patient= $_POST['patient'];
    $medecintr = $_POST['medecin_trait'];
    $motifhosp = $_POST['motif_hospitalisation'];
    $datehosp = $_POST['date_hospitalisation'];
    $hosptby = $_POST['serv_id'];
    $note =$_POST['note'];
    $chambre =$_POST['chambre_id'];
    $lit =$_POST['lit_id'];
    $id =$_POST['id'];
    updateHospitalisation($patient, $medecintr, $motifhosp, $datehosp, $hosptby, $note, $id, $chambre, $lit);
}

elseif (isset($_POST['libhospi'])) {
    $date_lib = $_POST['date_lib'];
    $note =$_POST['note'];
    $id =$_POST['id'];
    liberePat($id, $date_lib, $note);
}