<?php
session_start();
require_once('../confg/Connexion.php');
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
		 	switch ($resultat['level']) {
		 		case 1:
				$_SESSION['login'] = $resultat['login'];
				$_SESSION['level']=$resultat['level'];
				$_SESSION['user'] = $resultat['nomuser'];
		 	    header('Location:../pages/default.php');
		 		break;
				//chef entites
				case 2:
				$_SESSION['login'] = $resultat['login'];
				$_SESSION['level']=$resultat['level'];
				$_SESSION['user'] = $resultat['nomuser'];
					header('Location:ecole/accueil.php');
				break;

				//chef infirmerie
				case 3:
					$_SESSION['login'] = $resultat['login'];
					$_SESSION['level']=$resultat['level'];
					$_SESSION['user'] = $resultat['nomuser'];
						header('Location:ecole/accueil.php');
				break;

				case 6:
				$_SESSION['login'] = $resultat['login'];
				$_SESSION['level']=$resultat['level'];
				$_SESSION['user'] = $resultat['nomuser'];
					header('Location:ecole/accueil.php');
				break;

		 		case 8:		
				$_SESSION['login'] = $resultat['login'];
				$_SESSION['user'] = $resultat['nomuser'];
				$_SESSION['aleatoire']=rand(1,9).$_SESSION['user'];
		 	    header('Location:super_user/vue/acceuil.php');
		 		break;
		 		default:
		 			break;
		 	}
		 }
		 else{
		 	
		 }
}



