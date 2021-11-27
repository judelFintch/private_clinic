<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
<body>


<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
      <div class="main-panel">
      <?php var_dump(select_by_id($_GET['code']))?>
      <div class="content-wrapper">
        <div class="row">
       
            <div class="col-lg-12 grid-margin stretch-card">
              
                <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title"></h4>
                        <div class="d-flex">
                            <a href="" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Editer</a>
                            <a href="" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Liberer</a>
                        </div>
                    </div>
                    
                </div>
              </div>
          </div>
        </div>
        </div>
    <!-- content-wrapper ends -->
<?php include('../partials/_footer.php')?>