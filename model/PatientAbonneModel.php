<?php
 function InsertPatientAbonne($nom,$postnom,$presnom,$datenaiss,$genre,$nomentrp,$matricule,$groupe,$situation,$tel,$email,$adresse){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO patientsAbonne VALUES ('','$nom','$postnom','$presnom','$datenaiss','$genre','$nomentrp','$matricule','$groupe','$situation','$tel','$email','$adresse')") or die(print_r($bdd->error_info()));
     
     if($insert){
         echo "Insertion reussi";
      }
      else{
        $message=false;
      }
    }

  function selectPatientAbonne(){
    global $bdd;
    $select=$bdd->query("SELECT * FROM patientsAbonne") or die(print_r($bdd->error_info()));
    $data=$select->fetch();
    return $data;
 }
 function updatePatient($id, $nom,$postnom,$presnom,$datenaiss,$genre,$nomentrp,$matricule,$photo,$groupe,$situation,$tel,$email,$adresse){
  global $bdd ;
  $upd=$bdd ->query("UPDATE  patients SET nom='$nom',postnom='$postnom',presnom='$presnom',datenaiss='$datenaiss',genre='$genre',nomentrp='$nomentrp',matricule='$matricule',photo='$photo',groupe='$groupe',situation='$situation', tel='$tel',email='$email',adresse='$adresse' WHERE id='$id'") or die(print_r($bdd->error_info()));
  
  return true;
}

function select_by_id($id){
  global $bdd;
  $select=$bdd->query("SELECT * FROM patientsAbonne WHERE patient_code like('$id') ") or die(print_r($bdd->error_info()));
  $data=$select->fetch();
  return $data;
}

function PatientCode(){
  global $bdd;
  $select=$bdd->query("SELECT id FROM patientsAbonne ORDER BY id DESC LIMIT 1") or die(print_r($bdd->error_info()));
  $data=$select->fetch();
  $data='PL'.$data['id'];
  return $data;
}