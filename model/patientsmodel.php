<?php
 function InsertPatient($nom,$postnom,$prenom,$datenaiss,$genre,$photo,$typemedecin,$role,$tel,$email,$adresse){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO patients VALUES ('','$nom','$postnom','$prenom','$datenaiss','$genre','$photo','$groupe_sanguin','$situation_fa','$tel','$email','$adresse')") or die(print_r($bdd->error_info()));
     if($insert){
         echo "Insertion reussi";
      }
    }

     function selectPatient(){
        global $bdd ;
        $select=$bdd ->query("SELECT * FROM medecin") or die(print_r($bdd->error_info()));
        $data=$select->fetch();
        return $data;
 }