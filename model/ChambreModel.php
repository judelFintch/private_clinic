<?php
  
    function insert() {
    
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "INSERT INTO chambre (nom_chambre, nombre_lit, detail_chambre, prix_chambre) VALUES (?,?,?,?)";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new chambre($ob->id, $ob->nom_chambre, $ob->nombre_lit, $ob->detail_chambre, $ob->prix_chambre);
                }
            }
            return $tableau;



}

function select_all(){
    
        $connexion = Connexion::GetConnexion();
        $requete = "SELECT * FROM chambre ";
        $reponse = $connexion->prepare($requete);
        $reponse->execute();
        $tableau = array();
        if($reponse != null){
            while($obj = $reponse->fetch(PDO::FETCH_OBJ)  ){
                $tableau[] = new Patient($obj->id, $obj->nom_chambre, $obj->nombre_lit, $obj->detail_chambre, $obj->prix_chambre);
            }
        }
        return $tableau;
}
function delete($id){
    
        $connexion = Connexion::GetConnexion();
        $requete = "DELETE FROM chambre  WHERE id = '$id' ";
        $reponse = $connexion->prepare($requete);
        $reponse->execute();

    }
function update($id){
    $pdo_connexion = Connexion::GetConnexion();
    $pdo_query = "UPDATE chambre where id='$id'";
    $pdo_result = $pdo_connexion->prepare($pdo_query);
    $pdo_result->execute();
    $tableau = array();
    if($pdo_result != NULL){
        while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
            $tableau[] = new Patient($ob->id, $ob->nom_chambre, $ob->nombre_lit, $ob->detail_chambre, $ob->prix_chambre);
        }
    }
    return $tableau;


    
}