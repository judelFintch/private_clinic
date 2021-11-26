
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
                        <h4 class="card-title">Ajouter une prestation</h4>
                        <div class="d-flex">
                            <a href="./patient.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <form action = "../controlleur/PrestationController.php" method = "post" class="forms-sample row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Libelle </label>
                                <input type="text"name="libelleprestation" class="form-control form-control-sm" placeholder="Code Chambre">
                            </div>

                            <div class="form-group">
                                <label >Prix</label>
                                <input type="text" name="prix" class="form-control form-control-sm" placeholder="Prix chambre">
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Ajouter un service</label>
                                <select class="form-control form-control-sm" name= "nomservice">
                                    <option>Selectionnez un service</option>
                                    <option>Medical</option>
                                    <option>Nursing</option>
                                    <option>Laboratoire</option>
                                    <option>Pharmacie</option>
                                    <option>Radiologie</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label ><Details></Details></label>
                                <input type="text"name="detail" class="form-control form-control-sm" placeholder="detail chambre">
                            </div>
                           
                        </div>
                        <div class="col-md-12">
                            <button type="submit"name="btn_prestation" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
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

