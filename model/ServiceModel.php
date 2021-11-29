<?php
 function InsertService($libelle,$detail){
     global $bdd;
     $message=false;
     $insert=$bdd->query("INSERT INTO service VALUES ('','$libelle','$detail',0)") or die(print_r($bdd->error_info()));
     
     
     if($insert){
         echo "Insertion reussi";
      }
    }
    
   /* function UpdateService($id, $libelle, $detail)
    {
      global $bdd;
      $insert = $bdd -> query("UPDATE service SET libelle = ?, detail = ? where id = ?");
      if ($insert->execute([$Libelle, $detail, $id])) {
         echo "update successfully";
      }
    }*/

     function selectServices(){
        global $bdd ;
        $select=$bdd ->query("SELECT * FROM service") or die(print_r($bdd->error_info()));
        $data=$select->fetch();
        return $data;
 }
 function updateService($id,$libelle, $detail){
  global $bdd ;
  $upd=$bdd ->query("UPDATE  service SET libelle='$libelle',detail='$detail' WHERE id='$id'") or die(print_r($bdd->error_info()));
  return true;
}