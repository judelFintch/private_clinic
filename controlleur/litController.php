<?php
session_start();
require_once('../model/LitModel.php');
<<<<<<< HEAD
require_once('../confg/Connexion.php');
=======
require_once('../confg/config.php');
>>>>>>> ae3ddb019a599ba126e48e2c3fa887c5746006ba

if(isset($_POST['btn_lit'])){

    $codeLit = $_POST['codeLit'];
    $chambre = $_POST['chambre'];
    $ajout = InsertLit($codeLit, $chambre);


}