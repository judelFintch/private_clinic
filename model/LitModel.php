<?php
 function InsertLit($codeLit,$chambre){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO lit VALUES ('','$codeLit','$chambre')");
     if($insert){
         echo true; 
      }
      else{
           echo false;
      }

    }

  function selectChambre(){
    global $bdd;
    $select=$bdd->query("SELECT * FROM chambre") ;
    $data=$select->fetch();
    return $data;
 }