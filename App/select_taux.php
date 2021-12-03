<?php
require_once('../confg/Connexion.php');
function select_taux(){
    global $bdd;
    $select_taux=$bdd->query("SELECT taux FROM taux");
}