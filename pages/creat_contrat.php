<?php

    require_once('../confg/Connexion.php');
    require_once('../controlleur/AbonneController.php');

	if($_REQUEST['id']) {
		$id = $_REQUEST['id'];
        $resultat=$bdd ->query("SELECT * FROM abonne WHERE id=$id") or die(print_r($bdd->error_info()));
		if($resultat) {
			 $sql = "SELECT * FROM abonne WHERE  id=".$id;

            $data=$resultat->fetch();
			$id = $_REQUEST['id '];
           
			
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
                        <h4 class="card-title">Signer Contrat</h4>
                        <div class="d-flex">
                            <a href="show_contrat.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Tous les abonnés</a>
                        </div>
                    </div>
                    <form action = "../controlleur/ContratController.php"class="forms-sample row" method ="post">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label >ID</label>
                                <input type="text"name="id" value="<?php echo $data['id']; ?>" class="form-control form-control-sm" placeholder="libelle entreprise">
                            </div>
                            <div class="form-group">
                                <label >Libelle</label>
                                <input type="text"name="libelle" value="<?php echo $data['libelle']; ?>" class="form-control form-control-sm" placeholder="libelle entreprise">
                            </div>
                            <div class="form-group">
                                <label >Nom Responsable</label>
                                <input type="text"name="nomRes" value="<?php echo $data['nomRes']; ?>" class="form-control form-control-sm" placeholder="Nom responsable">
                            </div>

                            <div class="form-group">
                                <label >Prix</label>
                                <input type="text"name="prix" class="form-control form-control-sm" placeholder="prix">
                            </div>
                            <div class="form-group">
                                <label >Date Signature</label>
                                <input type="date"name="datesign" class="form-control form-control-sm" placeholder="Id-Nat">
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Type Contrat</label>
                                <select class="form-control form-control-sm" name="typecontrat">
                                    <option>Selectionnez un type</option>
                                    <option>Forfait</option>
                                    <option>Acte</option>
                                  </select>
                            </div>
                            
                            <div class="form-group">
                                <label >Etat</label>
                                <select class="form-control form-control-sm" name="etat">
                                    <option>Selectionnez un etat du contrat</option>
                                    <option>En cours</option>
                                    <option>Suspendu</option>
                                   
                                  </select>
                            </div
                        <div class="col-md-12">
                            <button type="submit" name="btn_contrat" class="btn btn-primary btn-sm mr-2">Signer</button>
                            <button class="btn btn-light btn-sm">Annuler</button>
                        </div>
                    </form>
                  </div>
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