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
                <a href="" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
            </div>
          </div>
                  <?php
                    $select=$bdd ->query("SELECT * FROM patients WHERE status like('0') ORDER BY id desc") or die(print_r($bdd->error_info()));
                     ?>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Postnom</th>
                            <th>Prenom</th>
                            <th>Genre</th>
                            <th>Operations</th>
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
                            <td>'.$res['genre'].'</td>
                            <td>
                                 <a class="badge badge-success" href="updatePatient.php?id='.$res['id'].'">  Modifier</a>
                                 <a class="badge badge-danger" href="updatePatient.php?id='.$res['id'].'">  Details</a>';
                                  if($_SESSION['level']==2){echo '
                                 <a class="badge badge-warning" href="encodage.php?code='.$res['patient_code'].'">  Encoder</a>
                                 ';}
                                 if($_SESSION['level']==3){echo '
                                 <a class="badge badge-info" href="op_caisse.php?code='.$res['patient_code'].'">  Caisse</a>
                                 ';}
                                 if($_SESSION['level']==3 OR $_SESSION['level']==1  OR $_SESSION['level']==7){echo '
                                  <a class="badge badge-danger" href="proformat.php?code='.$res['code_op'].'">  Proformat</a>
                                  ';}
                                 echo '
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

