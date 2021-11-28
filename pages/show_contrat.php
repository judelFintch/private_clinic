<?php include('../partials/app.php')?>
<?php include('../controlleur/ContratController.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>

      <div class="main-panel">
        <div class="content-wrapper">
        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Liste Contrat</h4>
                        
</div>
                        <?php
                    $select=$bdd ->query("SELECT * FROM contrat") or die(print_r($bdd->error_info()));
                     ?>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Nom Responsable</th>
                            <th>Prix</th>
                            <th>Date signature</th>
                            <th>Type contrat</th>
                            <th>Etat</th>
                            <th>Action</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                      <?php
                  
                  while ($res = $select->fetch()){
                    echo '

                          <tr>
                            <td>'.$res['id'].'</td>
                            <td>'.$res['nomRes'].'</td>
                            <td>'.$res['prix'].'</td>
                            <td>'.$res['datesign'].'</td>
                            <td>'.$res['typecontrat'].'</td>
                            <td><label class="badge badge-danger">'.$res['etat'].'</label></td>
                            <td><a href="change_contrat.php?id='.$res['id'].'" class="btn btn-primary"  aria-pressed="true">changer etat</a></td>
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

