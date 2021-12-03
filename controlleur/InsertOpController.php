<?php

require_once('../confg/Connexion.php');
require_once('../model/OperationModel.php');
if(isset($_POST['acte'])){
     $date=date('d-m-Y');
     $acte=$_POST['acte'];
     $code_patient=$_POST['code_patient'];
     $insert_op=insert_init_op($acte,$code_patient);
     echo 1;

}

if(isset($_POST['prestation'])){
     $date=date('d-m-Y');
     $prestation=$_POST['prestation'];
     $code_patient=$_POST['code_patient'];
     $insert_op=insert_init_prestation($prestation,$code_patient);
     echo 1;

}
if(isset($_POST['selectService'])){
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
               Taux
               </th>
               
          </tr>
          </thead>";
          $tot_prest=0;
               foreach ($data_op as $key) {
                    $tot_prest+=$key['price'];
                    $item .= "
                    <tr>";
                    $item .= "
                    <td class='code'>".$key['code_op']."</td>
                    <td>".$key['libelle']."</td>
                    <td>".$key['date_op']."</td>
                    <td>".$key['price']." CDF</td>
                    <td>".$key['taux']." </td>
                    
                    ";
                    }
                    $item .= "</tr>
                    <tr><td></td><td></td><td>Total :</td> <td>".$tot_prest." CDF</td></tr>
                    </table>
                    ";
                    echo utf8_encode($item);

     //return $data_op;
    
}

if(isset($_POST['selectService_one'])){
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