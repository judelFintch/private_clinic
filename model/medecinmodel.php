<?php


 function insert($nom, $postnom,$prenom,$datenaiss,$genre,$typemedecin,$role,$tel,$email,$adresse) {
    
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "INSERT INTO medecin (nom, postnom, prenom, datenaiss, genre, photo, typemedecin,role, tel, email, adresse) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute([$this->id, $this->nom, $this->postnom, $this->prenom, $this->datenaiss, $this->genre, $this->photo, $this->typemedecin, $this->role, $this->tel, $this->email, $this->adresse]);
             
            return $true;


}

function select_all(){
    
        $connexion = Connexion::GetConnexion();
        $requete = "SELECT * FROM medecin ";
        $reponse = $connexion->prepare($requete);
        $reponse->execute();
        $tableau = array();
        if($reponse != null){
            while($obj = $reponse->fetch(PDO::FETCH_OBJ)  ){
                $tableau[] = new Patient($obj->id, $obj->nom, $obj->postnom, $obj->prenom,$obj->age, $obj->sexe, $obj->type, $obj->role);
            }
        }
        return $tableau;
}
function delete($id){
    
        $connexion = Connexion::GetConnexion();
        $requete = "DELETE FROM medecin  WHERE id = '$id' ";
        $reponse = $connexion->prepare($requete);
        $reponse->execute();

    }
function update($id){
    $pdo_connexion = Connexion::GetConnexion();
    $pdo_query = "UPDATE medecin set nom=?, postnom=?, prenom=?, age=?, sexe=?, type=?, role=? where id='$id'";
    $pdo_result = $pdo_connexion->prepare($pdo_query);
    $pdo_result->execute();
    $tableau = array();
    if($pdo_result != NULL){
        while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
            $tableau[] = new Patient($ob->id, $ob->nom, $ob->postnom, $ob->prenom,$ob->age, $ob->sexe, $ob->type, $ob->role);
        }
    }
    return $tableau;


    
}