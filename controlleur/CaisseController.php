<?php
session_start();
require_once('../model/CaisseModel.php');
require_once('../confg/Connexion.php');
if(isset($_POST['btn_caisse'])){
    $patient= $_POST['patient'];
    $devise= $_POST['devise'];
    $date= $_POST['date'];
    $montant = $_POST['montant'];
    $creat_caisse = Creat_caisse($patient, $devise, $date, $montant);
}
