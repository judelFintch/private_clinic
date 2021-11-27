<?php
session_start();
require_once('../model/LitModel.php');
require_once('../confg/Connexion.php');
if(isset($_POST['btn_lit'])){
    $codeLit = $_POST['codeLit'];
    $chambre = $_POST['chambre'];
    $ajout = InsertLit($codeLit, $chambre);
}