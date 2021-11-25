<?php include('../partials/app.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
<?php require('../controlleur/medecincontroller.php')?>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Liste medecin</h4>
                        <div class="d-flex">
                            <a href="./createMedecin.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                      
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>
                              
                            </th>
                            <th>
                              Nom
                            </th>
                            <th>
                              Post-Nom
                            </th>
                            <th>
                              Prénom
                            </th>
                            <th>
                              Date de naissance
                            </th>
                            <th>Operations</th>
                          </tr>
                        </thead>
                        <?php foreach (getMedecins() as $medecin): ?>
                        <tbody>
                        <tr>
                            <td class="py-1">
                            <?=$medecin['id']?>
                            </td>
                            <td>
                            <?=$medecin['nom']?>
                            </td>
                            <td>
                            <?=$medecin['postnom']?>
                            </td>
                            <td>
                            <?=$medecin['prenom']?>
                            </td>
                            <td>
                            <?=$medecin['date_nais']?>
                            </td>
                            <td>
                                <a href="./" class="btn btn-warning btn-sm">Editer</a>
                                <a href="./" class="btn btn-success btn-sm">Dossier</a>
                            </td>
                          </tr>
                          
                        </tbody>

                        <?php endforeach; ?>
                        <!-- <tbody>
                          <tr>
                            <td class="py-1">
                              <img src="./../images/faces/face1.jpg" alt="image"/>
                            </td>
                            <td>
                              Irung
                            </td>
                            <td>
                              Murund
                            </td>
                            <td>
                              Rodrigue
                            </td>
                            <td>
                              08 janvier 2000
                            </td>
                            <td>
                                <a href="./" class="btn btn-warning btn-sm">Visualiser</a>
                            </td>
                          </tr>
                          
                          <tr>
                            <td class="py-1">
                              <img src="./../images/faces/face1.jpg" alt="image"/>
                            </td>
                            <td>
                              Mwema
                            </td>
                            <td>
                              Kasongo
                            </td>
                            <td>
                              Alpha
                            </td>
                            <td>
                              04 Avril 1999
                            </td>
                            <td>
                                <a href="./" class="btn btn-warning btn-sm">Editer</a>
                                <a href="./" class="btn btn-success btn-sm">Dossier</a>
                            </td>
                          </tr>
                          
                        </tbody> -->
                      </table>
                    </div>
          
                    </div>
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>
