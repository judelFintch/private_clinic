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
                        <h4 class="card-title">Nouveau patient</h4>
                        <div class="d-flex">
                            <a href="./patient.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <form class="forms-sample row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Nom</label>
                                <input type="text"name="nom" class="form-control form-control-sm" placeholder="Nom du patient">
                            </div>
                            <div class="form-group">
                                <label >Post-Nom</label>
                                <input type="text"name="postnom" class="form-control form-control-sm" placeholder="Post_Nom du patient">
                            </div>
                            <div class="form-group">
                                <label >Prénom</label>
                                <input type="text"  name="prenom" class="form-control form-control-sm" placeholder="Prenom du patient">
                            </div>
                            <div class="form-group">
                                <label>Date de naissance</label>
                                <input type="date" class="form-control form-control-sm" placeholder="Prenom du patient">
                            </div>
                            <div class="form-group">
                                <label >Genre</label>
                                <select class="form-control form-control-sm">
                                    <option>Selectionnez le genre du patient</option>
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
                                <label >Groupe sanguin</label>
                                <select class="form-control form-control-sm">
                                    <option>Selectionnez le Groupe sanguin du patient</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label >Situation familiale</label>
                                <select class="form-control form-control-sm">
                                    <option>Selectionnez la Situation familiale</option>
                                    <option>Marié</option>
                                    <option>Célibataire</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label >Téléphone</label>
                                <input type="number" class="form-control form-control-sm" placeholder="Numero tel du patient">
                            </div>
                            <div class="form-group">
                                <label >G-Mail</label>
                                <input type="mail" class="form-control form-control-sm" placeholder="Prenom du patient">
                            </div>
                            <div class="form-group">
                                <label >Adresse</label>
                                <input type="mail" class="form-control form-control-sm" placeholder="Prenom du patient">
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



