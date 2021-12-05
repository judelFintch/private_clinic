<?php
session_start();
require_once('../confg/Connexion.php');
$code_patient=$_POST['code_patient'];

$info_op=$bdd->query("SELECT * FROM  patients WHERE patient_code LIKE('$code_patient')");
$data=$info_op->fetch();
$code_op=$data['code_op'];
$login=$_SESSION['login'];
//insert into facture_tion
//generation code facture
$inser_dmd_facturation=$bdd->query("INSERT INTO facturation VALUES('','$code_op','$code_patient','','','','','','','2050') ");
if($inser_dmd_facturation){
    echo 1;
}
else{
    echo 0;
}


