<?php
require_once('../confg/Connexion.php');
require_once('../model/OperationModel.php');
if(isset($_POST['select_all'])){
    $code_patient=$_POST['code_patient'];
    $date=date('d-m-Y');
     $code_patient=$_POST['code_patient'];
     $data_op=select_by_op($code_patient);
    //$data_op=$bdd->query("SELECT * FROM mouvement where code_patient like '%$code_patient%' ");
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
              
         </tr>
         </thead>";
         $total=0;
              foreach ($data_op as $key) {
                   $total+=$key['price'];
                   $item .= "
                   <tr>";
                   $item .= "
                   <td class='code'>".$key['code_op']."</td>
                   <td>".$key['libelle']."</td>
                   <td>".$key['date_op']."</td>
                   <td>".$key['price']."</td>
                   ";
                   }
                   $item .= "</tr>
                   <tr><td></td><td></td><td>Total :</td> <td>".$total." CDF</td></tr>
                   </table>
                   ";
                   echo utf8_encode($item);
    //return $data_op;

}