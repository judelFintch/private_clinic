<?php
 function InsertService($libelle,$detail){
     global $bdd;
     $message=false;
     $insert=$bdd->query("INSERT INTO service_op VALUES ('','$libelle','$detail',0)") or die(print_r($bdd->error_info()));
     
     if($insert){
        $message=true;
      }
      else{
        $message=false;
      }
      return $message;
    }
    

  function selectServices(){
        global $bdd ;
        $select=$bdd ->query("SELECT * FROM service_op");
        $data=$select->fetch();
        return $data;
 }
 
 function updateService($id,$libelle, $detail){
  global $bdd ;
  $upd=$bdd ->query("UPDATE  service_op SET libelle='$libelle',detail='$detail' WHERE id='$id'") or die(print_r($bdd->error_info()));
  return true;
}