<?php
function code_op(){
  global $bdd;
  $select=$bdd->query("SELECT id FROM code_op ORDER BY id DESC LIMIT 1") or die(print_r($bdd->error_info()));
  $data=$select->fetch();
  $data='OP'.$data['id'].date('y').date('m');
  return $data;
}

function select_service_by_id($id){
  global $bdd;
  $data=$bdd->query("SELECT * FROM service_op WHERE id LIKE ('$id')");
  $data=$data->fetch();
  return $data;
}

 function InsertPatient($patient_code,$nom,$postnom,$prenom,$datenaiss,$genre,$situation,$tel,$email,$adresse,$service){
     global $bdd ;
     $message=false;
     $code=code_op();
    

    $data_service=select_service_by_id($service);
    $libelle=$data_service['libelle'];
    $id_act=$data_service['id'];
    $price=$data_service['price'];

     $insert=$bdd ->query("INSERT INTO patients VALUES ('','$nom','$postnom','$prenom','$datenaiss','$genre','','$situation','$tel','$email','$adresse','$patient_code','false','$code')") ;
      if($insert){
        $message=true;
        $creat_op=$bdd->query("INSERT INTO report_soins VALUES('','$patient_code','$code',now(),'','$libelle','$price','encours')");
        $creat_mvmt=$bdd->query("INSERT INTO mouvement VALUES('','$code','$patient_code','$libelle','$price','false','','user','$service','2050',now())");
        $bdd->query("INSERT INTO code_op VALUES('')");
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