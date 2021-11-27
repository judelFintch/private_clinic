<?php
    
function insertHospitalistion($patient, $medecintr, $motifhosp, $datehosp, $hosptby, $note, $chambre, $lit)
{
 global $bdd ;
 $insert=$bdd ->query("INSERT INTO hospitalisation(patient, medecintr, motifhosp, datehosp, serv_id, note, chambre, lit) VALUES ('$patient', '$medecintr', '$motifhosp', '$datehosp', '$hosptby', '$note', '$chambre', '$lit')") or die(print_r($bdd->error_info()));
 if($insert){
     echo "Insertion reussi";
  }
}

 function showHospitalisation(){
    global $bdd ;
    $select=$bdd ->query("SELECT * FROM hospitalisation") or die(print_r($bdd->error_info()));
    $data=$select->fetch();
    return $data;
}

function updateHospitalisation($patient, $medecintr, $motifhosp, $datehosp, $hosptby, $note,$id, $chambre, $lit){
    global $bdd ;
    $update=$bdd ->query("UPDATE  hospitalisation SET patient = '$patient' , medecintr='$medecintr', motifhosp='$motifhosp', datehosp='$datehosp', serv_id = '$hosptby', note = '$note', chambre = '$chambre', lit='$lit'  WHERE id='$id'") or die(print_r($bdd->error_info()));
    if ($update) {
        echo "Update successfully";
    }
}

function liberePat($id, $datelib, $note)
{
    global $bdd ;
    $update=$bdd ->query("UPDATE  hospitalisation SET statut_hosp = '1', note = '$note', datesort = '$datelib'  WHERE id='$id'") or die(print_r($bdd->error_info()));
    if ($update) {
        echo "Update successfully";
    }
}