
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
                            <a href="show_abonne.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Tous les abonnés</a>
                        </div>
                    </div>
                    <form action = "../controlleur/AbonneController.php"class="forms-sample row" method ="post">
                        <div class="col-md-6">
                       
                            <div class="form-group">
                                <label >Libelle</label>
                                <input type="text"name="libelle" class="form-control form-control-sm" placeholder="libelle entreprise" required= "required" >
                            </div>
                            <div class="form-group">
                                <label >Nom Responsable</label>
                                <input type="text"name="nomRes"  class="form-control form-control-sm" placeholder="Nom responsable" required = "required">
                            </div>

                            <div class="form-group">
                                <label >RCCM</label>
                                <input type="text"name="rccm" class="form-control form-control-sm" placeholder="RCCM" required = "required">
                            </div>
                            <div class="form-group">
                                <label >Id-Nat</label>
                                <input type="text"name="idnat" class="form-control form-control-sm" placeholder="Id-Nat" required = "required">
                            </div>
                            <div class="form-group">
                                <label >Adresse</label>
                                <input type="text"name="adresse" class="form-control form-control-sm" placeholder="Adresse" required = "required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Type Abonné</label>
                                <select class="form-control form-control-sm" name="typeabonne">
                                    <option>Selectionnez un type</option>
                                    <option>Entrprise</option>
                                    <option>Particulier</option>
                                   
                                  </select>
                            </div>
            
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="btn_abonne" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
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

