<?php
require_once('../confg/Connexion.php');
require_once('../model/OperationModel.php');
if(isset($_POST['acte'])){
     $date=date('d-m-Y');
     $acte=$_POST['acte'];
     $code_patient=$_POST['code_patient'];
     $insert_op=insert_init_op($acte,$code_patient);
     echo 1;
     ;
}

if(isset($_POST['selectService'])){
     $date=date('d-m-Y');
     $data_op=select_by_op();
     $item='';
     foreach ($data_op as $key ) {
          $item .= "
          <table class='table table-striped table-bordered '>
               <tr>";
              $item .= "<td>".$key['id']."</td>
              <td class='code'>".$key['codeconsultation']."</td>
              <td>".$key['date_debut']."</td>
              <td>".$key['operation']."</td>
              ";
          

               $item .= "</tr></table>";
          }
          echo utf8_encode($item);

     //return $data_op;
    
}