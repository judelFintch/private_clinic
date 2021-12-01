<?php include('../partials/app.php')?>
<?php include('../controlleur/AbonneController.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>

      <div class="main-panel">
        <div class="content-wrapper">
        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Liste Abonnes</h4>
                        <div class="d-flex">
                            <a href="./nouveaumedecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
                        </div>
</div>
                        <?php
                    $select=$bdd ->query("SELECT * FROM abonne") or die(print_r($bdd->error_info()));
                     ?>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Libelle</th>
                            <th>Nom Responsable</th>
                            <th>RCCM</th>
                            <th>Id-Nat</th>
                            <th>Adresse</th>
                            <th>Type Abonne</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                      <?php
                  
                  while ($res = $select->fetch()){
                    echo '

                          <tr>
                            <td>'.$res['id'].'</td>
                            <td>'.$res ['libelle'].'</td>
                            <td>'.$res['nomRes'].'</td>
                            <td>'.$res['rccm'].'</td>
                            <td>'.$res['idnat'].'</td>
                            <td>'.$res['adresse'].'</td>
                            <td><label class="badge badge-danger">'.$res['typeabonne'].'</label></td>
                            <td><a href="creat_contrat.php?id='.$res['id'].'"">  Signer contrat</a></td>
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

