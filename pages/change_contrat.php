<?php

    require_once('../confg/Connexion.php');
    require_once('../model/ContratModel.php');

	if($_REQUEST['id']) {
		$id = $_REQUEST['id'];
        $resultat=$bdd ->query("SELECT * FROM contrat WHERE id=$id") or die(print_r($bdd->error_info()));
		if($resultat) {
			 $sql = "SELECT * FROM contrat WHERE id=".$id;
			// echo $id;
            $data=$resultat->fetch();
			$id = $_REQUEST['id'];
			
?>

<?php include('../partials/app.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
      <div class="main-panel">
        <div class="content-wrapper">  
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Modifier Etat</h4>
                        <div class="d-flex">
                            <a href="./Medecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <form class="forms-sample row"  method="POST" action="../controlleur/ContratController.php">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label >ID</label>
                                <input type="text" name="id"  value="<?php echo $data['id']; ?>" class="form-control form-control-sm" placeholder="Ex : Katembue">
                            </div>
                            <div class="form-group">
                            <label >Etat</label>
                                <input type="text" name="etat"  value="<?php echo $data['etat']; ?>" class="form-control form-control-sm" placeholder="Ex : Katembue">
                            </div>
        </div>
                            <div class="col-md-12">
                            <button name="btn_modifier" type="submit" class="btn btn-success btn-sm mr-2">Modifier</button>
        </div>
                        </div>
                    </form>


                            <?php include('../partials/_footer.php')?>


<?php
		}
		// si l'id n'est pas correcte on affiche une erreur
		else {
			echo 'Désolé mais aucun enregistrement ne correspond';
		}
	}
	// si l'id n'est pas renseignée on affiche une erreur
	else {
		echo 'Erreur, l\'id n\'a pas été renseigné';
	}
?>