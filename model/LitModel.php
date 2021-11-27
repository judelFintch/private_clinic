<?php
 function InsertLit($codeLit,$chambre){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO lit VALUES ('','$codeLit','$chambre')") or die(print_r($bdd->error_info()));
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