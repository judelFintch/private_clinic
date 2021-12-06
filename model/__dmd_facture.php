<?php
session_start();
require_once('../confg/Connexion.php');
$code_patient=$_POST['code_patient'];
require_once('../model/TauxModel.php');
$id_user=$_SESSION['id_user'];
$taux=select_taux();

$info_op=$bdd->query("SELECT * FROM  patients WHERE code_op LIKE('$code_patient')");
$data=$info_op->fetch();
$code_op=$data['code_op'];
$login=$_SESSION['login'];
//insert into facture_tion
//generation code facture
$inser_dmd_facturation=$bdd->query("INSERT INTO facturation VALUES('','$code_op','$code_patient','','','','$id_user','','','$taux',now()) ");
if($inser_dmd_facturation){
    echo 1;
}
else{
    echo 0;
}


