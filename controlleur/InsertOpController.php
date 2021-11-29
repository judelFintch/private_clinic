<?php
require_once('../confg/Connexion.php');
require_once('../model/OperationModel.php');
if(isset($_POST['acte'])){
     $acte=$_POST['acte'];
     $insert_op=insert_init_op($acte);
}