<?php
 function InsertLit($codeLit,$chambre){
     global $bdd ;
     $message=false;
     $insert=$bdd ->query("INSERT INTO lit VALUES ('','$codeLit','$chambre')");
     if($insert){
         $message=true; 
      }
      else{
          $message=false;
      }
      return $message;
    }

  function selectChambre(){
    global $bdd;
    $select=$bdd->query("SELECT * FROM chambre") ;
    $data=$select->fetch();
    return $data;
 }