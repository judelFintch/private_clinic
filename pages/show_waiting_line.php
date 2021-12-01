<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
<div class="main-panel">
<div class="content-wrapper">
<div class="d-flex align-items-center justify-content-between">
        <h4 class="card-title">Liste D'attente</h4>
        <div class="d-flex">
            <a href="./nouveaumedecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
        </div>
         </div>
         <?php
                   $select=$bdd ->query("SELECT * FROM ffiledattente") or die(print_r($bdd->error_info()));
                  ?>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
<<<<<<< HEAD
                            <th>Id</th>
                            <th>Nom </th>
                            <th>Post-Nom</th>
                            <th>Prenom</th>
                            <th>Genre</th>
                            <th>Date</th>
                            <th>Etat</th>
                          
=======
                            <th>
                              #
                            </th>
                            <th>
                              Patient
                            </th>
                            <th>
                              Date hospitalisation
                            </th>
                            <th>
                              Service 
                            </th>
                            <th>
                               Medecin traitant
                            </th>
                            <th>
                                Statut
                            </th>
>>>>>>> e51f8381496653912673bcb72cca5bcee6f5786b
                          </tr>
                        </thead>
                        <?php
                   $select=$bdd ->query("SELECT * FROM hospitalisation") or die(print_r($bdd->error_info()));
                  ?>
                        <tbody>
<<<<<<< HEAD
                        
                        <?php
                  
                  while ($result = $select->fetch()){
                    echo '

                
                          <tr>
                            <td>'.$result['id'].'</td>
                            <td>'.$result ['nom'].'</td>
                            <td>'.$result['postnom'].'</td>
                            <td>'.$result['presnom'].'</td>
                            <td>'.$result['genre'].'</td>
                            <td>'.$result['date'].'</td>

                           
                          
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
=======
                          
                        <?php
                  
                  while ($result = $select->fetch()){
                    ?>
                          <tr>
                            <td><?= $result['id'] ?></td>
                            <td><?= getPatientName($result['patient'])  ?></td>
                            <td><?= $result['datehosp'] ?></td>
                            <td><?= getServiceName($result['serv_id']) ?></td>
                            <td><?= getMedecinName($result['medecintr']) ?></td>
                            <td><?php
                            if ($result['statut_hosp'] == 0) {
                              ?>
                              <label class="badge badge-warning">En cours</label>
                              <?php
                            }else {
                              ?><label class="badge badge-success">Liberé</label>
                              <?php
                            }
                            ?></td>
                            <td><a href="detailhospitalisation.php?id=<?= $result['id'] ?>" class="btn btn-warning btn-sm">Voir</a></td>
                          </tr>
                         <?php
                  }?>
                        </tbody>
                      </table>
                      </div>
                </div>
              </div>
          </div>
        </div>
>>>>>>> e51f8381496653912673bcb72cca5bcee6f5786b
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>
