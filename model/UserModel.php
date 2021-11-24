<?php
  
    function insert() {
    
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "INSERT INTO patients (nom, postnom, prenom, age, sexe) VALUES (?,?,?,?,?)";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new Patient($ob->id, $ob->nom, $ob->postnom, $ob->prenom, $ob->age, $ob->sexe);
                }
            }
            return $tableau;



}

function select_all(){
    
        $connexion = Connexion::GetConnexion();
        $requete = "SELECT * FROM user ";
        $reponse = $connexion->prepare($requete);
        $reponse->execute();
        $tableau = array();
        if($reponse != null){
            while($obj = $reponse->fetch(PDO::FETCH_OBJ)  ){
                $tableau[] = new Patient($obj->id, $obj->nom, $obj->postnom, $obj->prenom,$obj->age, $obj->sexe);
            }
        }
        return $tableau;
}
function delete($id){
    
        $connexion = Connexion::GetConnexion();
        $requete = "DELETE FROM user  WHERE id = '$id' ";
        $reponse = $connexion->prepare($requete);
        $reponse->execute();

    }
function update($id){
    $pdo_connexion = Connexion::GetConnexion();
    $pdo_query = "UPDATE user where id='$id'";
    $pdo_result = $pdo_connexion->prepare($pdo_query);
    $pdo_result->execute();
    $tableau = array();
    if($pdo_result != NULL){
        while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
            $tableau[] = new Patient($ob->id, $ob->nom, $ob->postnom, $ob->prenom,$ob->age, $ob->sexe);
        }
    }
    return $tableau;


    
}