<?php 

function Creat_contrat($nomRes,$prix,$datesign,$typecontrat,$etat){
 global $bdd;
 $creat_contrat=$bdd->query("INSERT INTO contrat Values('','$nomRes','$prix','$datesign','$typecontrat','$etat')");
  if($creat_contrat){
      echo true;
  }
  else{
      echo false;
  }
}

function change_contrat($id, $etat){
    global $bdd ;

    $upd=$bdd ->query("UPDATE  contrat SET etat='$etat 'WHERE id='$id'") or die(print_r($bdd->error_info()));
    
    return true;
}

function select_contrat(){
    global $bdd;
    $data=$bdd->query("SELECT * FROM contrat");
    return $data;
}

function select_contrat_by_id($id){
    global $bdd;
    echo $id;
    $data_r=$bdd->query("SELECT * FROM contrat WHERE id like('$id')");
    $data=$data_r->fetch();
    return $data;
}