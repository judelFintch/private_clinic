<?php
require_once('./../confg/crudhelp.php');
$dbh = new crudhelp();
if(isset($_POST['savemed'])){
    if (!empty(isset($_POST['medecinname'])) && !empty(isset($_POST['postnom'])) && !empty(isset($_POST['date_nais'])) && !empty(isset($_POST['sexe'])) && !empty(isset($_POST['type'])) && !empty(isset($_POST['role']))) {
        try {
            $age = $_POST['date_nais'];
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
else {
   echo 'la vache';
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