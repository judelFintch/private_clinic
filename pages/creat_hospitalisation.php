
<?php include('../partials/app.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php'); include('../confg/Connexion.php');?>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Ajouter une hospitalistion</h4>
                        <div class="d-flex">
                            <a href="show_hospitalisation.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Toutes les hospitalisations</a>
                        </div>
                    </div>
                    <form class="forms-sample row" method="POST" action="../controlleur/HospitalisationController.php">
                        
                        <div class="col-md-4">
                            
                            <div class="form-group">
                                <label >Patient</label>
                                <?php
                                  $patients=$bdd ->query("SELECT * FROM patients") or die(print_r($bdd->error_info()));
                                ?>
                                <select name="patient" class="form-control form-control-sm">
                                  <?php
                                  while ($patient = $patients->fetch()){
                                    ?>
                                    <option value="<?= $patient['id'] ?>"><?= $patient['nom'] ." ".$patient['postnom']. " ".$patient['presnom'] ?> </option>
                                    <?php
                                  }
                                  ?>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Date hospitalisation</label>
                                <input type="date" name="date_hospitalisation" class="form-control form-control-sm" placeholder="Nom du patient">
                            </div>
                            <div class="form-group">
                                <label >Service</label>
                                <?php
                                  $services=$bdd ->query("SELECT * FROM service_op") or die(print_r($bdd->error_info()));
                                ?>
                                <select name="serv_id" class="form-control form-control-sm">
                                  <?php
                                  while ($service = $services->fetch()){
                                    ?>
                                    <option value="<?= $service['id'] ?>"><?= $service['libelle']  ?> </option>
                                    <?php
                                  }
                                  ?>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Motif hospitalisation</label>
                                <input type="text" name="motif_hospitalisation" class="form-control form-control-sm" required="required">
                                    
                            </div>
                            <div class="form-group">
                                <label >Chambre</label>
                                <?php
                                  $rooms=$bdd ->query("SELECT * FROM room") or die(print_r($bdd->error_info()));
                                ?>
                                <select name="chambre_id" class="form-control form-control-sm">
                                  <?php
                                  while ($room = $rooms->fetch()){
                                    ?>
                                    <option value="<?= $room['id'] ?>"><?= $room['room_code']  ?> </option>
                                    <?php
                                  }
                                  ?>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Lit</label>
                                <?php
                                  $lits=$bdd ->query("SELECT * FROM lit") or die(print_r($bdd->error_info()));
                                ?>
                                <select name="lit_id" class="form-control form-control-sm">
                                  <?php
                                  while ($lit= $lits->fetch()){
                                    ?>
                                    <option value="<?= $lit['id'] ?>"><?= $lit['bed_code']  ?> </option>
                                    <?php
                                  }
                                  ?>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            
                            <div class="form-group">
                                <label >Medecin traitant</label>
                                <?php
                                  $medecins=$bdd ->query("SELECT * FROM medecin") or die(print_r($bdd->error_info()));
                                ?>
                                <select name="medecin_trait" class="form-control form-control-sm">
                                  <?php
                                  while ($medecin = $medecins->fetch()){
                                    ?>
                                    <option value="<?= $medecin['id'] ?>"><?= $medecin['nom'] ." ".$medecin['postnom']. " ".$medecin['prenom'] ?> </option>
                                    <?php
                                  }
                                  ?>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Note</label>
                                <input type="text" name="note" class="form-control form-control-sm" placeholder="note ou remarque" required="required">
                            </div>
                            
                        </div>
                        <div class="col-md-12">
                            <button name="savehospi" type="submit" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
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

