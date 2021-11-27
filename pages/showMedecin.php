<?php include('../partials/app.php')?>

<?php include('../confg/Connexion.php')?>
<?php include('../controlleur/medecincontroller.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>


      <div class="main-panel">
        <div class="content-wrapper">
        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Liste medecin</h4>
                        <div class="d-flex">
                            <a href="./createMedecin.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
                        </div>
                    </div>
                    <?php
                    $select=$bdd ->query("SELECT * FROM medecin") or die(print_r($bdd->error_info()));
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
                            <th>Role</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                      <?php
                  
                  while ($resultat = $select->fetch()){
                    echo '

                
                          <tr>
                            <td>'.$resultat ['id'].'</td>
                            <td>'.$resultat ['nom'].'</td>
                            <td>'.$resultat['postnom'].'</td>
                            <td>'.$resultat['prenom'].'</td>
                            <td>'.$resultat['datenaiss'].'</td>
                            <td>'.$resultat['role'].'</td>
                            <td>'.$resultat['tel'].'</td>
                            <td>'.$resultat['email'].'</td>
                            <td><a href="updateMedecin.php?id='.$resultat['id'].'">  Modifier</a></td>
                           
            
                          </tr>
                              ';
                            
                    }
                  ?>
                 
                          
                        </tbody>
                      </table>
                    </div>
                    </div>
    <?php include('../partials/_footer.php')?>
