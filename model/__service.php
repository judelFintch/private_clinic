<?php
/*
require_once('../confg/Connexion.php');

veillez bien à vous connecter à votre base de données 
$term = $_GET['term'];
$requete = $bdd->prepare("SELECT libelleprestation FROM prestation  WHERE libelleprestation LIKE :term  " ); // j'effectue ma requête SQL grâce au mot-clé LIKE
$requete->execute(array('term' => $term.'%'));
$array = array(); // on créé le tableau
while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
array_push($array, $donnee['libelleprestation']); // et on ajoute celles-ci à notre tableau
}
echo json_encode($array); // il n'y a plus qu'à convertir en JSON
?>/ */
$array = array("foo", "bar", "hello", "world");
echo json_encode($array); // il n'y a plus qu'à convertir en JSON