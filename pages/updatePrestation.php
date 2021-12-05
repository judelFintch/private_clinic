<?php
	
    require_once('../confg/Connexion.php');
    require_once('../model/PrestationModel.php');

	if($_REQUEST['id']) {
		$id = $_REQUEST['id'];
        $resultat=$bdd ->query("SELECT * FROM prestation WHERE id=$id") or die(print_r($bdd->error_info()));
		if($resultat) {
			 $sql = "SELECT * FROM prestation WHERE id=".$id;
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
                        <h4 class="card-title">Modifier une prestation</h4>
                        
                    </div>
                    <form action = "../controlleur/PrestationController.php" method = "post" class="forms-sample row">
                        <div class="col-md-6">
                                <input type="hidden" name="id"  value="<?php echo $data['id']; ?>" class="form-control form-control-sm" placeholder="Ex : Katembue">
                            <div class="form-group">
                                <label >Libelle </label>
                                <input type="text"name="libelleprestation"value="<?php echo $data['libelleprestation']; ?>" class="form-control form-control-sm" placeholder="Code Chambre">
                            </div>

                            <div class="form-group">
                                <label >Prix</label>
                                <input type="text" name="prix" value="<?php echo $data['prix']; ?>" class="form-control form-control-sm" placeholder="Prix chambre">
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Ajouter un service</label>
                                <input class="form-control form-control-sm" name= "nomservice" value="<?php echo $data['nomservice']; ?>">
               
                            </div>
                            <div class="form-group">
                                <label ><Details></Details></label>
                                <input type="text"name="detail"value="<?php echo $data['detail']; ?>" class="form-control form-control-sm" placeholder="detail chambre">
                            </div>
                        </div>
                
                        <div class="col-md-12">
                            <button name="btn_modifier" type="submit" class="btn btn-success btn-sm mr-2">Modifier</button>
                            <button class="btn btn-light btn-sm">Annuler</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  
                </div>
              </div>
            </div>
          </div>
    <!-- content-wrapper ends -->
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