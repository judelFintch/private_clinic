<?php
 function InsertService($libelle,$detail,$service_prix){
     global $bdd;
     $message=false;
     $insert=$bdd->query("INSERT INTO service_op VALUES ('','$libelle','$detail','$service_prix')") or die(print_r($bdd->error_info()));
     
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
 
 function updateService($id,$libelle, $detail,$prix){
  global $bdd ;
  $upd=$bdd ->query("UPDATE  service_op SET libelle='$libelle',detail='$detail',price='$prix' WHERE id='$id'") or die(print_r($bdd->error_info()));
  return true;
}