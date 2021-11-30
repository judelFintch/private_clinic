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
     $item .= "
     <div class='table-responsive'>
          <table class='table table-striped'>
          <thead>
          <tr>
               <th>
               #codeOp
               </th>
               <th>
               Date
               </th>
               <th>
               Motif de la visite
               </th>
               <th>
               Prix 
               </th>
               <th>
               Effacer
               </th>
          </tr>
          </thead>";
               foreach ($data_op as $key) {
                    $item .= "
                    <tr>";
                    $item .= "
                    <td class='code'>".$key['codeconsultation']."</td>
                    <td>".$key['date_debut']."</td>
                    <td>".$key['operation']."</td>
                    <td>".$key['price']."</td>
                    <td><button class='delete btn btn-danger btn-rounded btn-fw'>Effacer</button> </td>
                    ";
                    }
                    $item .= "</tr>
                    </table>
                    ";
                    echo utf8_encode($item);

     //return $data_op;
    
}