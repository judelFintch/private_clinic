<?php
 function InsertAgent($nom,$postnom,$prenom,$datenaiss,$genre,$nomentrep,$matricule,$photo,$groupe,$situation,$tel,$email,$adresse){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO agent VALUES ('','$nom','$postnom','$prenom','$datenaiss','$genre','$nomentrep','$matricule','$photo','$groupe','$situation','$tel','$email','$adresse')") or die(print_r($bdd->error_info()));
     
     if($insert){
         echo "Insertion reussi";
      }
      else{
        $message=false;
      }
    }

  function selectAgent(){
    global $bdd;
    $select=$bdd->query("SELECT * FROM agent") or die(print_r($bdd->error_info()));
    $data=$select->fetch();
    return $data;
 }
 function updateAgent($id, $nom,$postnom,$prenom,$datenaiss,$genre,$nomentrep,$matricule,$photo,$groupe,$situation,$tel,$email,$adresse){
  global $bdd ;
  $upd=$bdd ->query("UPDATE  patients SET nom='$nom',postnom='$postnom',presnom='$presnom',datenaiss='$datenaiss',genre='$genre',nomentrp='$nomentrp',matricule='$matricule',photo='$photo',groupe='$groupe',situation='$situation', tel='$tel',email='$email',adresse='$adresse' WHERE id='$id'") or die(print_r($bdd->error_info()));
  
  return true;
}


