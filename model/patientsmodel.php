<?php
 function InsertPatient($nom,$postnom,$prenom,$datenaiss,$genre,$photo,$groupe,$situation,$tel,$email,$adresse){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO patients VALUES ('','$nom','$postnom','$prenom','$datenaiss','$genre','$photo','$groupe','$situation','$tel','$email','$adresse')") or die(print_r($bdd->error_info()));
     if($insert){
         echo "Insertion reussi";
      }
    }

     function selectPatient(){
        global $bdd ;
        $select=$bdd ->query("SELECT * FROM patients") or die(print_r($bdd->error_info()));
        $data=$select->fetch();
        return $data;
 }