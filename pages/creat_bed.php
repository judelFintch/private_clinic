
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
                        <h4 class="card-title">Ajouter un lit</h4>
                        <div class="d-flex">
                            <a href="./patient.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <form class="forms-sample row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Code Lit</label>
                                <input type="text"name="nom_lit" class="form-control form-control-sm" placeholder="Code Lit">
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Chambre</label>
                                <select class="form-control form-control-sm">
                                    <option>Selectionnez une chambre</option>
                                    <option>Chambre 1</option>
                                    <option>Chambre 2</option>
                                    <option>Chambre 3</option>
                                    
                                  </select>
                            </div>
                           
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
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
