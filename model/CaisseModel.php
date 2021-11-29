<?php 

function Creat_caisse($patient,$devise,$date,$montant){
 global $bdd;
 $creat_caisse=$bdd->query("INSERT INTO caisse Values('','$patient','$devise','$date','$montant')");
  if($creat_caisse){
      echo true;
  }
  
      echo false;
  }


function select_caisse(){
    global $bdd;
    $data=$bdd->query("SELECT * FROM caisse");
    return $data;
}