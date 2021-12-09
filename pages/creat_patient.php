<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
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
                        <h4 class="card-title">Nouveau patient</h4>
                        <div class="d-flex">
                            <a href="" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <form action = "../controlleur/PatientController.php" method = "post" class="forms-sample row">
                        <div class="col-md-6">
                        <input type="hidden" required name="patient" value="<?=PatientCode()?>" >
    
                            <div class="form-group">
                                <label >Nom</label>
                                <input type="text"  name="nom" class="form-control form-control-sm" placeholder="Nom du patient">
                            </div>
                            <div class="form-group">
                                <label >Post-Nom</label>
                                <input type="text" required  name="postnom" class="form-control form-control-sm" placeholder="Post_Nom du patient" >
                            </div>
                            <div class="form-group">
                                <label >Prénom</label>
                                <input type="text" required name="prenom" class="form-control form-control-sm" placeholder="Prenom du patient" >
                            </div>
                            <div class="form-group">
                                <label>Age ou date Naissance</label>
                                <input type="text"  name="datenaiss" class="form-control form-control-sm" placeholder="Prenom du patient">
                            </div>
                            <div class="form-group">
                                <label >Genre</label>
                                <select class="form-control form-control-sm" name = "genre" required="required">
                                    <option>Selectionnez le genre du patient</option>
                                    <option>Homme</option>
                                    <option>Femme</option>
                                  </select>
                            </div>
                          
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Situation familiale</label>
                                <select class="form-control form-control-sm" name="situation" required="required">
                                    <option>Selectionnez la Situation familiale</option>
                                    <option>Enfant</option>
                                    <option>Célibataire</option>
                                    <option>Marié</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label >Téléphone</label>
                                <input type="tel" name="tel" class="form-control form-control-sm" placeholder="Numero tel du patient" required="required">
                            </div>

                            <div class="form-group">
                               
                                <input type="hidden" name="email" class="form-control form-control-sm" placeholder="Prenom du patient" >
                            </div>

                            <div class="form-group">
                                <label >Adresse</label>
                                <input type="adresse" name="adresse" class="form-control form-control-sm" placeholder="Prenom du patient" required="required">
                            </div>
                            <div class="form-group">
                                <label >Date Entree</label>
                                <input type="text" value="<?=date('d-m-Y')?>" name="date_entree" class="form-control form-control-sm" required="required">
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
                                    <option value="<?= $service['id'] ?>"><?= $service['libelle']  ?> <?= $service['price']  ?> $ </option>
                                    <?php
                                  }
                                  ?>
                                    
                                </select>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <button type="submit" name = "btn_patient" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
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

