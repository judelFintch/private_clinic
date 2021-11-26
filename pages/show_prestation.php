<?php include('../partials/app.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Liste medecin</h4>
                        <div class="d-flex">
                            <a href="./nouveaumedecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
                        </div>
                    </div>
                  
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Libelle Prestation</th>
                            <th> Prix</th>
                            <th>Nom Service</th>
                            <th> <Details></Details></th>
                          
                          </tr>
                        </thead>
                        <tbody>
                        
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><label class="badge badge-danger">En attente</label></td>
                            <td> </td>
                            <td> </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                    </div>
    <!-- content-wrapper ends -->
<?php include('../partials/_footer.php')?>