<?php 
require_once('../confg/Connexion.php');
function select_taux(){
    global $bdd;
    $taux=$bdd->query("SELECT taux FROM taux ORDER BY id DESC LIMIT 1");
    $taux=$taux->fetch();
    $taux=$taux['taux'];
    return $taux;
}

