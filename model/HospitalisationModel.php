<?php
  
    function insert() {
    
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "INSERT INTO hospitalisation (nom_patient, nom_medecin, motif_hopitalisation, date_hospitalisation, date_accord ) VALUES (?,?,?,?,?)";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new hospitalisation($ob->id, $ob->nom_patient, $ob->nom_medecin, $ob->motif_hospitalisation, $ob->date_hospitalisation, $ob->date_accord);
                }
            }
            return $tableau;



}

function select_all(){
    
        $connexion = Connexion::GetConnexion();
        $requete = "SELECT * FROM hospitalisation ";
        $reponse = $connexion->prepare($requete);
        $reponse->execute();
        $tableau = array();
        if($reponse != null){
            while($obj = $reponse->fetch(PDO::FETCH_OBJ)  ){
                $tableau[] = new Patient($obj->id, $obj->nom_patient, $obj->nom_medecin, $obj->motif_hospitalisation, $obj->date_hospitalisation, $obj->date_accord);
            }
        }
        return $tableau;
}
function delete($id){
    
        $connexion = Connexion::GetConnexion();
        $requete = "DELETE FROM hospitalisation  WHERE id = '$id' ";
        $reponse = $connexion->prepare($requete);
        $reponse->execute();

    }
function update($id){
    $pdo_connexion = Connexion::GetConnexion();
    $pdo_query = "UPDATE hospitalisation where id='$id'";
    $pdo_result = $pdo_connexion->prepare($pdo_query);
    $pdo_result->execute();
    $tableau = array();
    if($pdo_result != NULL){
        while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
            $tableau[] = new Patient($ob->id, $ob->nom_patient, $ob->nom_medecin, $ob->motif_hospitalisation, $ob->date_hospitalisation, $ob->date_accord);
        }
    }
    return $tableau;


    
}