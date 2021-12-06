<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                    <h3>Facture en Attente</h3>
                    <hr>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                           
                        </div>
                </div>
                    <?php
                    $select=$bdd ->query("SELECT * FROM Facturation WHERE status LIKE('1')") or die(print_r($bdd->error_info()));
                     ?>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#Id</th>
                            <th>#CodeOP</th>
                            <th>Code Patient</th>
                            <th>Date Operation</th>
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
                            <td>'.$res ['code_op'].'</td>
                            <td>'.$res ['code_facture'].'</td>
                            <td>'.$res['code_patient'].'</td>
                            <td>'.$res['date_op'].'</td>
                            <td>
                                 <a class="badge badge-success" href="details_fact_ok.php?code_op='.$res['code_op'].'&&code_p='.$res['code_patient'].'">  Details</a>
                            </td>
                            <td>
                                 <a class="badge badge-success" href="invoice-print.php?code_impr='.$res['code_op'].'">Imprimer</a>
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
              </div>
            </div>
          </div>
        </div>
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>

