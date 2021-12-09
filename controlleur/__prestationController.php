<?php
require_once('../confg/Connexion.php');
require_once('../model/OperationModel.php');
if(isset($_POST['select_all_caisse'])){
     session_start();
     $code_patient=$_POST['code_patient'];
    $date=date('d-m-Y');
    $code_patient=$_POST['code_patient'];
     //$data_op=select_by_op($code_patient);
    $data_op=$bdd->query("SELECT * FROM mouvement where code_op like '$code_patient' ORDER BY id DESC ");
    if($_SESSION['level']==3){
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
              qte
              </th>
              <th>
              Total
              </th>
              
         </tr>
         </thead>";
         $total=0;
              foreach ($data_op as $key) {
                   $total+=$key['price']*$key['qte'];
                   $item .= "
                   <tr>";
                   $item .= "
                   <td class='code'>".$key['code_op']."</td>
                   <td>".$key['libelle']."</td>
                   <td>".$key['date_op']." </td>
                   <td>".$key['price']." $</td>
                   <td>".$key['qte']." </td>
                   <td>".$key['qte']*$key['price']." $</td>
                   ";
                   }
                   $item .= "</tr>
                   <tr><td></td><td></td><td></td><td></td><td>Total :</td> <td>".$total."  $</td></tr>
                   </table>
                   ";
                   echo utf8_encode($item);
    //return $data_op;
               }

               if($_SESSION['level']==2){
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
                                   <td>".$key['date_op']." </td>
                                  
                                   ";
                                   }
                                   $item .= "</tr>
                                   
                                   </table>
                                   ";
                                   echo utf8_encode($item);
                    //return $data_op;
                               }
}