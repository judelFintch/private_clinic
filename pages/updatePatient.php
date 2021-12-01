<?php

    require_once('../confg/Connexion.php');
    require_once('../model/patientsmodel.php');

	if($_REQUEST['id']) {
		$id = $_REQUEST['id'];
        $resultat=$bdd ->query("SELECT * FROM patients WHERE id=$id") or die(print_r($bdd->error_info()));
		if($resultat) {
			 $sql = "SELECT * FROM patients WHERE id=".$id;
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
                        <h4 class="card-title">Modifier Patient</h4>
                        <div class="d-flex">
                            <a href="./Medecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <form class="forms-sample row"  method="POST" action="../controlleur/PatientController.php">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label >Id</label>
                                <input type="text" name="id"  value="<?php echo $data['id']; ?>" class="form-control form-control-sm" placeholder="Ex : Katembue">
                            </div>
                            <div class= "form-group">
                                <label >Nom</label>
                                <input type="text" name="nom"  value="<?php echo $data['nom']; ?>" class="form-control form-control-sm" placeholder="Ex : Katembue">
                            </div>
                            <div class="form-group">
                                <label >Post-Nom</label>
                                <input type="text" name="postnom" value="<?php echo $data['postnom']; ?>" class="form-control form-control-sm" placeholder="Ex : Mpunda">
                            </div>
                            <div class="form-group">
                                <label >Prénom</label>
                                <input type="text" name="presnom" value="<?php echo $data['presnom']; ?> "class="form-control form-control-sm" placeholder="Ex : John">
                            </div>
                            <div class="form-group">
                                <label>Date de naissance</label>
                                <input type="text" name="datenaiss" value="<?php echo $data['datenaiss']; ?>" class="form-control form-control-sm" placeholder="01-04-2000">
                            </div>
                            <div class="form-group">
                                <label >Genre</label>
                                <input type="text" name="genre" value="<?php echo $data['genre']; ?> "class="form-control form-control-sm">
                                    
                            </div>
                            <div class="form-group">
                                <label>Uploader image</label>
                                <input type="file" name="photo" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info form-control-sm" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button  class="file-upload-browse btn btn-primary btn-sm" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Groupe Sanguin</label>
                                <input type="text" name="groupe" value="<?php echo $data['groupe']; ?>"class="form-control form-control-sm">
                                   
                            </div>
                          
                            <div class="form-group">
                                <label >Situation Matrimoniale</label>
                                <input type="text" name="situation" value="<?php echo $data['situation']; ?>"class="form-control form-control-sm">
                                   
                            </div>
                            <div class="form-group">
                                <label >Telephone</label>
                                <input type="text" name="tel" value="<?php echo $data['tel']; ?> "class="form-control form-control-sm">
                                   
                            </div>
                            <div class="form-group">
                                <label >G-Mail</label>
                                <input name="email" value="<?php echo $data['email']; ?>" type="mail" class="form-control form-control-sm" placeholder="Email patient">
                            </div>
                            
                            
                            <div class="form-group">
                                <label >Adresse</label>
                                <input name="adresse" value="<?php echo $data['adresse']; ?>" type="text" class="form-control form-control-sm" placeholder="ex : Lubumbashi, Commune annexe Quatier kasapa, Rue ...">
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