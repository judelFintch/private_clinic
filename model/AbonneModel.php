<?php 

function Creat_abonne($libelle,$nomRes,$rccm,$idnat,$adresse,$typeabonne){
 global $bdd;
 $creat_abonne=$bdd->query("INSERT INTO abonne Values('','$libelle','$nomRes','$rccm','$idnat','$adresse','$typeabonne')");
  if($creat_abonne){
      echo true;
  }
  else{
      echo false;
  }
}

function select_abonne(){
    global $bdd;
    $data=$bdd->query("SELECT * FROM abonne");
    return $data;
}

function select_abonne_by_id($id){
    global $bdd;
    echo $id;
    $data_r=$bdd->query("SELECT * FROM abonne WHERE id like('$id')");
    $data=$data_r->fetch();
    return $data;
}