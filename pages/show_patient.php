<?php include('../partials/app.php')?>
<?php include('../model/Connexion.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>

      <div class="main-panel">
        <div class="content-wrapper">
        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Liste Patients</h4>
                        <div class="d-flex">
                            <a href="./nouveaumedecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
                        </div>
</div>
                        <?php
                    $select=$bdd ->query("SELECT * FROM patients") or die(print_r($bdd->error_info()));
                     ?>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Postnom</th>
                            <th>Prenom</th>
                            <th>Date naissance</th>
                            <th>Genre</th>
                            <th>Groupe Sanguin</th>
                            <th>Situation Matrimoniale</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Adresse</th>
                            <th>Etat</th>
                          </tr>
                        </thead>
                        <tbody>
                      <?php
                  
                  while ($res = $select->fetch()){
                    echo '

                          <tr>
                            <td>'.$res['id'].'</td>
                            <td>'.$res ['nom'].'</td>
                            <td>'.$res['postnom'].'</td>
                            <td>'.$res['presnom'].'</td>
                            <td>'.$res['datenaiss'].'</td>
                            <td>'.$res['genre'].'</td>
                            <td>'.$res['groupe'].'</td>
                            <td>'.$res['situation'].'</td>
                            <td>'.$res['tel'].'</td>
                            <td>'.$res['email'].'</td>
                            <td>'.$res['adresse'].'</td>
                            <td><label class="badge badge-danger">En attente</label></td>
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

