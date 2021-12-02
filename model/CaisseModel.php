<?php 

function Creat_caisse($patient,$devise,$date,$montant){
 global $bdd;

 $patient=$bdd->query("SELECT * FROM patients WHERE id like('$patient')");
 $data_info=$patient->fetch();
 $nom_patient=$data_info['nom'].' -'.$data_info['postnom'];

 $code_patient=$data_info['patient_code'];
  /*
 $code_op=$bdd->query("SELECT * FROM report_soins WHERE codepatient like('$code_patient')");
 $code_op_resultat=$code_op->fetch();
 var_dump($code_op_resultat);
 //$code_op=$code_op['codeconsultation'];*/

 if($devise=="CDF"){
    $creat_caisse=$bdd->query("INSERT INTO caisse Values('','$nom_patient','$devise','$date','$montant','','','$code_patient')");
    
 }
 else{
    $creat_caisse=$bdd->query("INSERT INTO caisse Values('','$nom_patient','$devise','$date',0,'$montant','','$code_patient')"); 
 }
 return true;
}
 
  

function select_caisse(){
    global $bdd;
    $data=$bdd->query("SELECT * FROM caisse");
    return $data;
}