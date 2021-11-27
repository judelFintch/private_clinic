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

    function updateMedecin($id){
        global $bdd ;
        $select=$bdd ->query("UPDATE  medecin SET nom=?, postnom=?, prenom=?, datenaiss=?, genre=?, photo=?,typemedecin=?
        ,role=?,tel=?, email=?, adresse=? WHERE id='$id'") or die(print_r($bdd->error_info()));
        $data=$upd->fetch();
        return $data;
}