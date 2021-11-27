<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
<?php include('../model/Chambremodel.php')?>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="d-flex align-items-center justify-content-between">
            <h4 class="card-title">Details Chambre</h4>
                <div class="d-flex">
                    <a href="./nouveaumedecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
                </div>
            </div>
            
        <div class="table-responsive">
            <?php 
                var_dump(select_room_by_id($_GET['id']));
            ?>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>

