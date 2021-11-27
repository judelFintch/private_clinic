
<?php include('../partials/app.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php'); 
include('../confg/Connexion.php');?>

<?php
    if (isset($_GET['id']) && !empty($_GET['id'])) 
    {
        global $bdd;
        $id = $_GET['id'];
        $req = "select * from hospitalisation where id = $id ";
        $stmt = $bdd->prepare($req);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
       
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Ajouter une hospitalistion</h4>
                        <div class="d-flex">
                        <a href="show_hospitalisation.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Voir details</a>
                        </div>
                    </div>
                    <form class="forms-sample row" method="POST" action="../controlleur/HospitalisationController.php">
                    <input type="hidden" name="id" value="<?= $result['id'] ?>">
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label >Date liberation</label>
                                <input type="date" name="date_lib" class="form-control form-control-sm" placeholder="Nom du patient">  
                            </div>
                            <div class="form-group">
                                <label >Note</label>
                                <input type="text" name="note" class="form-control form-control-sm" placeholder="note ou remarque">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button name="libhospi" type="submit" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
                            <button class="btn btn-light btn-sm">Annuler</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <?php
    }
?>
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>

