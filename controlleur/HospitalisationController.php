<?php
require_once('../model/HospitalisationModel');
require_once('../model/patientsmodel.php');
require_once('../model/medecinmodel.php');
require_once('../model/Connexion.php');
require_once('../config/config.php');

if(isset($_POST[''])){

    $nom = $_POST['nom_patient'];
    $postnom = $_POST['nom_medecin'];
    $prenom = $_POST['motif_hospitalisation'];
    $age = $_POST['date_hospitalisation'];
    $sexe = $_POST['date_accord'];
   

}