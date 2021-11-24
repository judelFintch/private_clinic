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
                        <h4 class="card-title">Nouveau Medecin</h4>
                        <div class="d-flex">
                            <a href="./Medecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <form class="forms-sample row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Nom</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Ex : Katembue">
                            </div>
                            <div class="form-group">
                                <label >Post-Nom</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Ex : Mpunda">
                            </div>
                            <div class="form-group">
                                <label >Prénom</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Ex : John">
                            </div>
                            <div class="form-group">
                                <label>Date de naissance</label>
                                <input type="date" class="form-control form-control-sm" placeholder="01-04-2000">
                            </div>
                            <div class="form-group">
                                <label >Genre</label>
                                <select class="form-control form-control-sm">
                                    <option>Selectionnez le genre du medecin</option>
                                    <option>Homme</option>
                                    <option>Femme</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Uploader image</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info form-control-sm" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary btn-sm" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Type medecin</label>
                                <select class="form-control form-control-sm">
                                    <option>Selectionnez type medecin</option>
                                    <option>Generaliste</option>
                                    <option>Specialiste</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label >Role du medecin</label>
                                <select class="form-control form-control-sm">
                                    <option>Selectionnez le role du medecin</option>
                                    <option>Visiteur</option>
                                    <option>Permanant</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label >Téléphone</label>
                                <input type="number" class="form-control form-control-sm" placeholder="Numero tel du patient">
                            </div>
                            <div class="form-group">
                                <label >G-Mail</label>
                                <input type="mail" class="form-control form-control-sm" placeholder="johndoe@gmail.com">
                            </div>
                            <div class="form-group">
                                <label >Adresse</label>
                                <input type="mail" class="form-control form-control-sm" placeholder="ex : Lubumbashi, Commune annexe Quatier kasapa, Rue ...">
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
