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
                            <th>Id</th>
                            <th>Nom </th>
                            <th>Post-Nom</th>
                            <th>Prenom</th>
                            <th>Genre</th>
                            <th>Date</th>
                            <th>Etat</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                        
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
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>
