<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
<div class="main-panel">
<div class="content-wrapper">
<div class="d-flex align-items-center justify-content-between">
        <h4 class="card-title">Liste Services</h4>
        <div class="d-flex">
            <a href="./nouveaumedecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
        </div>
         </div>
         <?php
                   $select=$bdd ->query("SELECT * FROM service") or die(print_r($bdd->error_info()));
                  ?>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th> Libelle </th>
                            <th> Details</th>
                            <th> Action</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                        
                        <?php
                  
                  while ($result = $select->fetch()){
                    echo '

                
                          <tr>
                            <td>'.$result['id'].'</td>
                            <td>'.$result ['libelle'].'</td>
                            <td>'.$result['detail'].'</td>
                            <td><a href="updateService.php?id='.$result['id'].'">  Modifier</a></td>
                          
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
