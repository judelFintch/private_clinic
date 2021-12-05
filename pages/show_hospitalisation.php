<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>

<?php
function getSingleRow()
{
  
}
  function getPatientName($id)
  {
    global $bdd;
    $req = "select nom, postnom, presnom from patients where id = $id ";
    $stmt = $bdd->prepare($req);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return  $result['nom']. " ".$result['postnom']. " ". $result['presnom'] ; 
  }
  function getServiceName($id)
  {
    global $bdd;
    $req = "select libelle from service_op where id = $id ";
    $stmt = $bdd->prepare($req);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return  $result['libelle'];
  }
  function getMedecinName($id)
  {
    global $bdd;
    $req = "select nom, postnom, prenom from medecin where id = $id ";
    $stmt = $bdd->prepare($req);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return  $result['nom']. " ".$result['postnom']. " ". $result['prenom'] ;
  }
?>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Suivis Hospitalisation</h4>
                        <div class="d-flex">
                            <a href="creat_hospitalisation.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
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
                                Statut
                            </th>
                          </tr>
                        </thead>
                        <?php
                   $select=$bdd ->query("SELECT * FROM hospitalisation") or die(print_r($bdd->error_info()));
                  ?>
                        <tbody>
                          
                        <?php
                  
                  while ($result = $select->fetch()){
                    ?>
                          <tr>
                            <td><?= $result['id'] ?></td>
                            <td><?= getPatientName($result['patient'])  ?></td>
                            <td><?= $result['datehosp'] ?></td>
                            <td><?= getServiceName($result['serv_id']) ?></td>
                            
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
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>
