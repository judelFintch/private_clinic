<?php
 function InsertPrestation($libelleprestation,$prix,$nomservice,$detail){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO prestation VALUES ('','$libelleprestation','$prix','$nomservice','$detail')") or die(print_r($bdd->error_info()));
     if($insert){
         echo "Insertion reussi";
      }
    }

     function selectPrestation(){
        global $bdd ;
        $select=$bdd ->query("SELECT * FROM prestation") or die(print_r($bdd->error_info()));
        $data=$select->fetch();
        return $data;
 }