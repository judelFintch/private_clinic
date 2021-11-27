<?php include('../partials/app.php')?>
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
                            <th>Date</th>
                            <th>Genre</th>
                            <th>Etat</th>
                            <th>Operation</th>
                          </tr>
                        </thead>
                        <tbody>
                      <?php
                  $count=0;
                  while ($res = $select->fetch()){
                    $count+=1;
                    echo '
                          <tr>
                            <td>'.$count.'</td>
                            <td>'.$res ['nom'].'</td>
                            <td>'.$res['postnom'].'</td>
                            <td>'.$res['presnom'].'</td>
                            <td>'.$res['datenaiss'].'</td>
                            <td>'.$res['genre'].'</td>
                            <td><label class="badge badge-danger">En attente</label></td>
                            <td>
                                 <a href="updatePatient.php?id='.$res['id'].'">  Modifier</a>
                                 <a href="updatePatient.php?id='.$res['id'].'">  Details</a>
                            </td>
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

