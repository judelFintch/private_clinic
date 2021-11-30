<?php
function code_op(){
    global $bdd;
    $select=$bdd->query("SELECT id FROM patients ORDER BY id DESC LIMIT 1") or die(print_r($bdd->error_info()));
    $data=$select->fetch();
    $data='OP'.$data['id'].date('y').date('m');
    return $data;
}

function insert_init_op($acte,$code_patient){
    global $bdd;
    $message=false;
    $date=date('d-m-Y');
    $data_service=select_by_id($acte);
    $libelle=$data_service['libelle'];
    $id_act=$data_service['id'];
    $price=$data_service['price'];
    $code_op=code_op();
    $creat_op=$bdd->query("INSERT INTO report_soins VALUES('','$code_patient','$code_op',now(),'','$libelle','$price','encours')");
    $creat_mvmt=$bdd->query("INSERT INTO mouvement VALUES('','$code_op','$code_patient','$price','false','','user','$id_act',now())");
        if($creat_op){
            $message=true;
        }
        else{
            $message=false;
        }
        return $message;
}



function select_by_id($id){
    global $bdd;
    $data=$bdd->query("SELECT * FROM service_op WHERE libelle LIKE ('$id')");
    $data=$data->fetch();
    return $data;
}


function select_by_op(){
    global $bdd;
    $data=$bdd->query("SELECT * FROM report_soins ");
    $data=$data->fetchAll();
    return $data;
}

