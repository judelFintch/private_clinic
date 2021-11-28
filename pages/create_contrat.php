
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
                        <h4 class="card-title">Ajouter une entreprise</h4>
                        <div class="d-flex">
                            <a href="show_room.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Toutes les chambres</a>
                        </div>
                    </div>
                    <form action = ""class="forms-sample row" method ="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Nom Responsable</label>
                                <input type="text"name="nomRes" class="form-control form-control-sm" placeholder="Nom responsable">
                            </div>

                            <div class="form-group">
                                <label >Prix Contrat</label>
                                <input type="number"name="prix" class="form-control form-control-sm" placeholder="RCCM">
                            </div>
                            <div class="form-group">
                                <label >Date Signature</label>
                                <input type="date"name="datesign" class="form-control form-control-sm" placeholder="Date signature">
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label >Type Contrat</label>
                                <select class="form-control form-control-sm" name="typecontrat">
                                    <option>Selectionnez un type</option>
                                    <option>Forfait</option>
                                    <option>Actes</option>
                                   
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Etat Contrat</label>
                                <select class="form-control form-control-sm" name="etat">
                                    <option>Selectionnez Etat contrat</option>
                                    <option>En cours</option>
                                    <option>Rupture</option>
                                    <option>Suspendu</option>
                                   
                                  </select>
                            </div>

                            <div class="form-group">
                                <label ><Details></Details></label>
                                <input type="text" name="room_details" class="form-control form-control-sm" placeholder="detail chambre">
                            </div>
            
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="btn_contrat" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
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

