<?php include('../partials/app.php')?>
<?php include('../controlleur/CaisseController.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>

      <div class="main-panel">
        
        <div class="content-wrapper">
      <p>
        <a href="show_caisse.php" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span>MA CAISSE</a>
        <a href="show_patient.php" class="btn btn-danger btn-sm mr-2"> <span class="icon-plus"></span>ENCOURS DE TRAITEMENT </a>
        <a href="show_caisse.php" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span>MES RAPPORTS</a>
        <a href="motif_depense.php" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span>OPTIONS DEPENSES</a>
        </p>
        <br>
        <h4 class="card-title">Liste paiement patients du <?= date('d-m-y') ?></h4>
        <div class="d-flex align-items-center justify-content-between">
          <hr>
        </div>
                    <?php
                    $date=date('Y-m-d');

                    $select=$bdd ->query("SELECT * FROM caisse WHERE date LIKE('$date')  ") or die(print_r($bdd->error_info()));
                     ?>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                             
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Montant CDF</th>
                            <th>Montant USD</th>
          
                          </tr>
                        </thead>
                        <tbody>
                      <?php
                  
                  while ($res = $select->fetch()){
                    echo '

                          <tr>
                            <td>'.$res['id'].'</td>
                            <td>'.$res ['patient'].'</td>
                            <td>'.$res['montant_cdf'].'</td>
                            <td>'.$res['montant_usd'].'</td>
                            <td>'.$res['devise'].'</td>
                        
                         
                            <td> </td>
                            <td> </td>
                          </tr>
                              ';
                    }
                  ?>
                          
                        </tbody>
                      </table>
                    </div>
                    </div>
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>

