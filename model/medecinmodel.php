<?php
    
    function InsertMedecin($nom,$postnom,$prenom,$datenaiss,$genre,$photo,$typemedecin,$role,$tel,$email,$adresse){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO medecin VALUES ('','$nom','$postnom','$prenom','$datenaiss','$genre','$photo','$typemedecin','$role','$tel','$email','$adresse')") or die(print_r($bdd->error_info()));
     if($insert){
         echo "Insertion reussi";
      }
    }

     function selectMedecin(){
        global $bdd ;
        $select=$bdd ->query("SELECT * FROM medecin") or die(print_r($bdd->error_info()));
        $data=$select->fetch();
        return $data;
 }
    function updateMedecin($id, $nom, $postnom, $prenom,$datenaiss,$genre,$photo,$typemedecin,$role,$tel,$email,$adresse){
        global $bdd ;
  
        $upd=$bdd ->query("UPDATE  medecin SET nom='$nom',postnom='$postnom',prenom='$prenom',datenaiss='$datenaiss',genre='$genre',photo='$photo',typemedecin='$typemedecin',role='$role', tel='$tel',email='$email',adresse='$adresse' WHERE id='$id'") or die(print_r($bdd->error_info()));
        
        return true;
}