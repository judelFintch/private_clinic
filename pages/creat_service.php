
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
                        <h4 class="card-title">Ajouter un service</h4>
                        <div class="d-flex">
                            <a href="./patient.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <form action="../controlleur/ServiceController.php" method="post" class="forms-sample row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Libelle</label>
                                <input type="text" name="libelle" class="form-control form-control-sm" placeholder="Libelle service" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label ><Details></Details></label>
                                <input type="text"name="detail" class="form-control form-control-sm" placeholder="detail chambre" required="required">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button name ="btn_service" type="submit" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
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

