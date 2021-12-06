<?php 

function Creat_caisse($patient,$devise,$date,$montant,$taux){
 global $bdd;
 session_start();
 $id_user=$_SESSION['id_user'];
 $patient=$bdd->query("SELECT * FROM patients WHERE code_op like('$patient')");
 $data_info=$patient->fetch();
 $nom_patient=$data_info['nom'].' -'.$data_info['postnom'];
 $code_patient=$data_info['patient_code'];
 $code_op=$data_info['code_op'];
 if($devise=="CDF"){
    $creat_caisse=$bdd->query("INSERT INTO caisse Values('','$nom_patient','$devise','$date','$montant','','$code_op','$code_patient','$taux','$id_user')");
    
 }
 else{
    $creat_caisse=$bdd->query("INSERT INTO caisse Values('','$nom_patient','$devise','$date',0,'$montant','$code_op','$code_patient','$taux','$id_user')"); 
 }
 return true;
}
 
  

function select_caisse(){
    global $bdd;
    $data=$bdd->query("SELECT * FROM caisse");
    return $data;
}