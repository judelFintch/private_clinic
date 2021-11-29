<?php


function code_op(){
    global $bdd;
    $select=$bdd->query("SELECT id FROM patients ORDER BY id DESC LIMIT 1") or die(print_r($bdd->error_info()));
    $data=$select->fetch();
    $data='OP'.$data['id'].date('y').date('m');
    return $data;
}

function insert_init_op($acte){
    global $bdd;
    $data_service=select_by_id($acte);
    $libelle=$data_service['libelle'];
    $price=$data_service['price'];
    $code_op=code_op();
    $creat_op=$bdd->query("INSERT INTO report_soins VALUES('','$code_op','$')");
}

function select_by_id($id){
    global $bdd;
    $data=$bdd->query("SELECT * FROM service_op WHERE libelle LIKE ('$id')");
    $data=$data->fetch();
    return $data;
}

