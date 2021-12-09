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
    $creat_mvmt=$bdd->query("INSERT INTO mouvement VALUES('','$code_op','$code_patient','$price','false','','user','$libelle','1',now())");
        if($creat_op){
            $message=true;
        }
        else{
            $message=false;
        }
        return $message;
}

function insert_init_prestation($acte,$code_patient,$taux,$qte){
    global $bdd;
    $message=false;
    $date=date('d-m-Y');
    //selection code patient
    $codeop=$bdd->query("SELECT patient_code FROM patients WHERE code_op like('$code_patient')");
    $code_rec=$codeop->fetch();
    
    $new_code=$code_rec['patient_code'];
    $data_service=select_by_prestation_id($acte);
    $libelle=$data_service['libelleprestation'];
    $id_service=$data_service['id'];
    $price=$data_service['prix'];
    //$code_op=code_op();
    session_start();
    $id_user=$_SESSION['id_user'];
   // $creat_op=$bdd->query("INSERT INTO report_soins VALUES('','$code_patient','$code_op',now(),'','$libelle','$price','encours')");
   $creat_mvmt=$bdd->query("INSERT INTO mouvement VALUES('','$code_patient','$new_code','$libelle','$price','false','','$id_user','$id_service','$taux','$qte',now())");
        if($creat_mvmt){
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

function select_by_prestation_id($id){
    global $bdd;
    $data=$bdd->query("SELECT * FROM prestation WHERE libelleprestation LIKE ('$id')");
    $data=$data->fetch();
    return $data;
}


function select_by_op($code_patient){
    global $bdd;
    //a recuperer en fonction du cote operation
    $data=$bdd->query("SELECT * FROM mouvement WHERE code_op like('$code_patient') ORDER BY id desc ");
    $data=$data->fetchAll();
    return $data;
}



