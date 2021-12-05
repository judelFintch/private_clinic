<?php
//session_start();
require_once('../confg/Connexion.php');
require_once('../model/TauxModel.php');
require_once('../model/CaisseModel.php');
if(isset($_POST['btn_caisse'])){
    $taux=select_taux();
    $patient= $_POST['patient'];
    $devise= $_POST['devise'];
    $date= $_POST['date'];
    $montant = $_POST['montant'];
    $creat_caisse = Creat_caisse($patient, $devise, $date, $montant,$taux);
    header("refresh: 0; ../pages/ma_caisse.php?op=success");
}
