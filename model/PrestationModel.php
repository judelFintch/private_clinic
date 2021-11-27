<?php
 function InsertPrestation($libelleprestation,$prix,$nomservice,$detail){
     global $bdd ;
     $insert=$bdd ->query("INSERT INTO prestation VALUES ('','$libelleprestation','$prix','$nomservice','$detail')") or die(print_r($bdd->error_info()));
     if($insert){
         echo "Insertion reussi";
      }
    }

     function selectPrestation(){
        global $bdd ;
        $select=$bdd ->query("SELECT * FROM prestation") or die(print_r($bdd->error_info()));
        $data=$select->fetch();
        return $data;
 }
      function updatePrestation($id,$libelleprestation,$prix,$nomservice,$detail){
      global $bdd ;
      $upd=$bdd ->query("UPDATE  prestation SET libelleprestation='$libelleprestation',nomservice='$nomservice',prix='$prix',detail='$detail' WHERE id='$id'") or die(print_r($bdd->error_info()));
      return true;
}