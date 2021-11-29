<?php
 function InsertPatient($patient_code,$nom,$postnom,$presnom,$datenaiss,$genre,$photo,$groupe,$situation,$tel,$email,$adresse){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO patients VALUES ('','$nom','$postnom','$presnom','$datenaiss','$genre','$photo','$groupe','$situation','$tel','$email','$adresse')") or die(print_r($bdd->error_info()));
     $insert=$bdd ->query("INSERT INTO ffiledattente VALUES('','$nom','$postnom','$presnom','$genre')") or die(print_r($bdd->error_info()));
     if($insert){
         echo "Insertion reussi";
      }
      else{
        $message=false;
      }
      return $message;
    }

  function selectPatient(){
    global $bdd;
    $select=$bdd->query("SELECT * FROM patients") or die(print_r($bdd->error_info()));
    $data=$select->fetch();
    return $data;
 }
 function updatePatient($id, $nom,$postnom,$presnom,$datenaiss,$genre,$photo,$groupe,$situation,$tel,$email,$adresse){
  global $bdd ;
  $upd=$bdd ->query("UPDATE  patients SET nom='$nom',postnom='$postnom',presnom='$presnom',datenaiss='$datenaiss',genre='$genre',photo='$photo',groupe='$groupe',situation='$situation', tel='$tel',email='$email',adresse='$adresse' WHERE id='$id'") or die(print_r($bdd->error_info()));
  
  return true;
}

function select_by_id($id){
  global $bdd;
  $select=$bdd->query("SELECT * FROM patients WHERE patient_code like('$id') ") or die(print_r($bdd->error_info()));
  $data=$select->fetch();
  return $data;
}

function PatientCode(){
  global $bdd;
  $select=$bdd->query("SELECT id FROM patients ORDER BY id DESC LIMIT 1") or die(print_r($bdd->error_info()));
  $data=$select->fetch();
  $data='PL'.$data['id'];
  return $data;
}