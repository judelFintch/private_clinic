
<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/Chambremodel.php')?>
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
                    <form method="post" action="../controlleur/litController.php" class="forms-sample row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Code Lit</label>
                                <input type="text"name="codeLit" class="form-control form-control-sm" placeholder="Code Lit">
                            </div>
                           
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Chambre</label>
                                <?php $rooms=select_all_room(); ?>
                                <select class="form-control form-control-sm" name = "chambre">
                                    <option>Selectionnez une chambre</option>
                                    <?php
                                      while($room=$rooms->fetch()){
                                        echo '
                                            <option value="'.$room['id'].'">'.$room['room_code'].'</option>';
                                        }
                                        ?>
                                  </select>
                            </div>
                           
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="btn_lit" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
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

