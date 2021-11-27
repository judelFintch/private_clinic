<?php
 function InsertPatient($nom,$postnom,$presnom,$datenaiss,$genre,$photo,$groupe,$situation,$tel,$email,$adresse){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO patients VALUES ('','$nom','$postnom','$presnom','$datenaiss','$genre','$photo','$groupe','$situation','$tel','$email','$adresse')") or die(print_r($bdd->error_info()));
     $insert=$bdd ->query("INSERT INTO ffiledattente VALUES('','$nom','$postnom','$presnom','$genre')") or die(print_r($bdd->error_info()));
     if($insert){
         echo "Insertion reussi";
      }
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