<?php
 function InsertChambre($codeChambre,$typechambre,$prix,$detail){
     global $bdd ;
     $insert=$bdd->query("INSERT INTO chambre VALUES ('','$codeChambre','$typechambre','$prix','$detail')") or die(print_r($bdd->error_info()));
     if($insert){
         echo "Insertion reussi"; 
      }
    }

     function selectChambre(){
        global $bdd;
        $select=$bdd->query("SELECT * FROM chambre") or die(print_r($bdd->error_info()));
        $data=$select->fetch();
        return $data;
 }