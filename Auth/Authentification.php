<?php
session_start();
require_once('../confg/Connexion.php');
//require_once('../model/TauxModel.php');

if(isset($_POST['login']) and (isset($_POST['psswd']))){
	$login=($_POST['login']);
	$psswd=($_POST['psswd']);
	Authenfication($login,$psswd);
  }
   function Authenfication($login,$passwd){
		global $bdd;	
		//requette
		$requete = $bdd->query("SELECT * FROM user WHERE login='$login' AND password_user='$passwd'") or die(print_r($bdd->errorinfo()));
		$resultat = $requete->fetch();
		if($resultat == 0){
			echo '<div class="alert alert-danger" id="cont" ><h3><center>Authenfication echouée!</h3></center></p><br /><br />';
		 }
		 elseif($resultat['login'] == $login AND $resultat['password_user'] == $passwd ){
		 	 if(!empty($resultat['login'])){
				  //recuperation du taux du jour
				$_SESSION['login'] = $resultat['login'];
				$_SESSION['level']=$resultat['level'];
				$_SESSION['user'] = $resultat['user_name'];
				$_SESSION['id_user'] = $resultat['id'];
		 	    header('Location:../index.php');
			}
		 		
		 }
		 else{
		 	
		 }
}



