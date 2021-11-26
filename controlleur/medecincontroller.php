<?php
session_start();
require_once('../model/MedecinModel');
require_once('../model/Connexion.php');
require_once('../config/config.php');

if(isset($_POST['btn_enregistrer'])){

    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $datenaiss = $_POST['datenaiss'];
    $genre = $_POST['genre'];
    $photo = $_POST['photo'];
    $typemedecin = $_POST['typemedecin'];
    $role = $_POST['role'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $ajout = MedecinModel::insert($nom, $postnom, $prenom, $datenaiss, $genre, $photo, $typemedecin, $role, $tel, $email, $adresse);

    header("Location:../");

require_once('./../confg/crudhelp.php');
$dbh = new crudhelp();
if(isset($_POST['savemed'])){
    if (!empty(isset($_POST['medecinname'])) && !empty(isset($_POST['postnom'])) && !empty(isset($_POST['date_nais'])) && !empty(isset($_POST['sexe'])) && !empty(isset($_POST['type'])) && !empty(isset($_POST['role']))) {
        try {
            $data = [
                "nom"=>$_POST['medecinname'],
                "postnom" => $_POST['postnom'],
                "prenom" => $_POST['prenom'],
                "date_nais" =>  $_POST['date_nais'],
                "sexe" =>  $_POST['sexe'],
                "type" =>  $_POST['type'],
                "role" =>  $_POST['role']
            ];
            $where = [
                "id" => 1
            ];
            //$dbh->update("medecin", $data, $where);
            $dbh -> insert("medecin", $data);
            //$dbh -> delete("medecin",$where);
            
            $datas = $dbh->getData("medecin");
            if(!empty($datas))
            { 
                $count = 0; 
                foreach($datas as $row)
                { 
                    $count++;
                    echo "$count => ". $row['nom'] ."<br>";
                }
            }
        } catch (Exception $th) {
            print($th);
        }
    }
    else {
        echo "merde";
    }

}
else if(isset($_POST['updatemed'])){
   if (isset($_GET['id'])) {
    if (!empty(isset($_POST['medecinname'])) && !empty(isset($_POST['postnom'])) && !empty(isset($_POST['date_nais'])) && !empty(isset($_POST['sexe'])) && !empty(isset($_POST['type'])) && !empty(isset($_POST['role']))) {
        try {
            $data = [
                "nom"=>$_POST['medecinname'],
                "postnom" => $_POST['postnom'],
                "prenom" => $_POST['prenom'],
                "date_nais" =>  $_POST['date_nais'],
                "sexe" =>  $_POST['sexe'],
                "type" =>  $_POST['type'],
                "role" =>  $_POST['role']
            ];
            $where = [
                "id" => $_GET['id']
            ];
            $dbh->update("medecin", $data, $where);
        } catch (Exception $th) {
            print($th);
        }
    }
    else {
        echo "merde";
    }
   }
}

function getMedecins()
{
    $db = new crudhelp();
    $datas = $db->getData("medecin");
    $result = null;
    if(!empty($datas))
    { 
        $result = $datas;
    }
    return $result;
}
   }