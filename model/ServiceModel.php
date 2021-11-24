<?php

    function insert() {
    
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "INSERT INTO service (libelle, prix_consultation, type_consultation) VALUES (?,?,?)";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new Patient($ob->id, $ob->libelle, $ob->prix_consultation, $ob->type_consultation);
                }
            }
            return $tableau;


      

}

function select_all(){
    
        $connexion = Connexion::GetConnexion();
        $requete = "SELECT * FROM service ";
        $reponse = $connexion->prepare($requete);
        $reponse->execute();
        $tableau = array();
        if($reponse != null){
            while($obj = $reponse->fetch(PDO::FETCH_OBJ)  ){
                $tableau[] = new Service($ob->id, $ob->libelle, $ob->prix_consultation, $ob->type_consultation);
            }
        }
        return $tableau;
}
function delete($id){
    
        $connexion = Connexion::GetConnexion();
        $requete = "DELETE FROM service  WHERE id = '$id' ";
        $reponse = $connexion->prepare($requete);
        $reponse->execute();

}