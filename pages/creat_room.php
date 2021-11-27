
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
                        <h4 class="card-title">Ajouter une chambre</h4>
                        <div class="d-flex">
                            <a href="./patient.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <form action = "../controlleur/ChambreController.php"class="forms-sample row" method ="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Code chambre</label>
                                <input type="text"name="room_code" class="form-control form-control-sm" placeholder="Code Chambre">
                            </div>

                            <div class="form-group">
                                <label >Prix</label>
                                <input type="text"name="room_price" class="form-control form-control-sm" placeholder="Prix chambre">
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Ajouter une chambre</label>
                                <select class="form-control form-control-sm" name="room_type">
                                    <option>Selectionnez un type</option>
                                    <option>VIP</option>
                                    <option>Moyen</option>
                                    <option>Simple</option>
                                  </select>
                            </div>

                            <div class="form-group">
                                <label ><Details></Details></label>
                                <input type="text" name="room_details" class="form-control form-control-sm" placeholder="detail chambre">
                            </div>
            
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="btn_chambre" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
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

