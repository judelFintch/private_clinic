<?php include('../partials/app.php')?>
<?php include('../controlleur/CaisseController.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>

      <div class="main-panel">
        <div class="content-wrapper">
        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Liste paiement patients du <?= date('d-m-y') ?></h4>
                        <div class="d-flex">
                            <a href="./nouveaumedecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
                        </div>
</div>
                        <?php
                    $select=$bdd ->query("SELECT * FROM caisse") or die(print_r($bdd->error_info()));
                    
                    
                  
                  
                     ?>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                             
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Montant</th>
                            <th>Devise</th>
                           
                          
                          </tr>
                        </thead>
                        <tbody>
                      <?php
                  
                  while ($res = $select->fetch()){
                    echo '

                          <tr>
                            <td>'.$res['id'].'</td>
                            <td>'.$res ['patient'].'</td>
                            <td>'.$res['montant'].'</td>
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

