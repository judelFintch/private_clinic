<?php
 function selectPatient($nom,$postnom,$presnom,$genre){
     global $bdd ;
     $insert=$bdd ->query("SELECT * FROM filedattente") or die(print_r($bdd->error_info()));
     $data=$select->fetch();
    return $data;
    }
