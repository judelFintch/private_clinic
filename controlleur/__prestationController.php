<?php
require_once('../confg/Connexion.php');
require_once('../model/OperationModel.php');
if(isset($_POST['select_all'])){
    $code_patient=$_POST['code_patient'];
   
    $date=date('d-m-Y');
    $code_patient=$_POST['code_patient'];
    $data_op=select_by_op($code_patient);
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
              Acte
              </th>
              <th>
              Date
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
                   <td class='code'>".$key['code_op']."</td>
                   <td>".$key['id_service']."</td>
                   <td>".$key['date_op']."</td>
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