<?php
session_start();
require_once('../model/LitModel.php');
require_once('../confg/Connexion.php');
if(isset($_POST['btn_lit'])){
    $codeLit = $_POST['codeLit'];
    $chambre = $_POST['chambre'];
    $create_bed = InsertLit($codeLit, $chambre);
     if($create_bed==1){
      header("refresh: 0; ../index.php?operation=beb_creat");
     }
     else{
        header("refresh: 0; ../index.php?operation=beb_error");
     }
}