<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
<?php
  function getServiceName($id)
  {
    global $bdd;
    $rq = "select libelle from service where id = $id ";
    $stm = $bdd->prepare($rq);
    $stm->execute();
    $resul = $stm->fetch(PDO::FETCH_ASSOC);
    return  $resul['libelle'];
  }
  
  function getLitName($id)
  {
    global $bdd;
    $rq = "select bed_code from lit where id = $id ";
    $stm = $bdd->prepare($rq);
    $stm->execute();
    $resul = $stm->fetch(PDO::FETCH_ASSOC);
    return  $resul['bed_code'];
  }
  
  function getChambreName($id)
  {
    global $bdd;
    $rq = "select room_code from room where id = $id ";
    $stm = $bdd->prepare($rq);
    $stm->execute();
    $resul = $stm->fetch(PDO::FETCH_ASSOC);
    return  $resul['room_code'];
  }
  
  function getMedecinName($id)
  {
    global $bdd;
    $rq = "select nom, postnom, prenom from medecin where id = $id ";
    $stm = $bdd->prepare($rq);
    $stm->execute();
    $resul = $stm->fetch(PDO::FETCH_ASSOC);
    return  $resul['nom']. " ".$resul['postnom']. " ". $resul['prenom'] ;
  }
?>
<?php


    if (isset($_GET['id']) && !empty($_GET['id'])) 
    {
        global $bdd;
        $id = $_GET['id'];
        $req = "select * from hospitalisation where id = $id ";
        $stmt = $bdd->prepare($req);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<style>
.st-theme-default > .nav .nav-link.active {
    color: #3F3E91 !important;
    cursor: pointer;
    
}.st-theme-default > .nav .nav-link.active::after {
    background: #3F3E91 !important;
    transform: scale(1);

}
.tab-content
{
    padding : 10px !important;
}


    </style>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Detail hospitalistion Numéro <?= $result['id'] ?></h4>
                        <div class="d-flex align-items-center">
                            <a href="show_hospitalisation.php" class="btn btn-primary btn-sm mr-2"> <span class="icon icon"></span>Retour</a>
                            <a href="edit_hospitalisation.php?id=<?= $result['id'] ?>" class="btn btn-primary btn-sm mr-2"> <span class="icon icon"></span>Editer</a>
                            <a href="liberepat.php?id=<?= $result['id'] ?>" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Liberer</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mt-2">
                        <a href="edit_hospitalisation.php?id=<?= $result['id'] ?>" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Laboratoire</a>
                        <a href="edit_hospitalisation.php?id=<?= $result['id'] ?>" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Ordonnance</a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="smarttab">
                                <ul class="nav">
                                    <li>
                                      <a class="nav-link" href="#tab-1">
                                        Detail
                                      </a>
                                    </li>
                                    <li>
                                      <a class="nav-link" href="#tab-2">
                                        Consultation
                                      </a>
                                    </li>
                                    <li>
                                      <a class="nav-link" href="#tab-3">
                                        Prestation
                                      </a>
                                    </li>
                                    <li>
                                      <a class="nav-link" href="#tab-4">
                                        Laboratoire
                                      </a>
                                    </li>
                                    <li>
                                      <a class="nav-link" href="#tab-5">
                                        Ordonnance
                                      </a>
                                    </li>
                                    
                                </ul>

                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                          
                                          <div class="col-md-12">
                                           
                                            <table class="table table-striped">
                                              <tbody>
                                                <tr>
                                                  <td>
                                                    Date hospitalisation
                                                  </td>
                                                  <td>
                                                    <?= $result['datehosp'] ?>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                   Status
                                                  </td>
                                                  <td><?php
                                                    if ($result['statut_hosp'] == 0) {
                                                      ?>
                                                      <label class="badge badge-warning">En cours</label>
                                                      <?php
                                                    }else {
                                                      ?><label class="badge badge-success">Liberé</label>
                                                      <?php
                                                    }
                                                  ?>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    Motif hospitalisation
                                                  </td>
                                                  <td>
                                                  <?= $result['motifhosp'] ?>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    Medecin traitant
                                                  </td>
                                                  <td>
                                                  <?= getMedecinName($result['medecintr']) ?>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    Service
                                                  </td>
                                                  <td>
                                                    <?= getServiceName($result['serv_id']) ?>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    Chambre et lit
                                                  </td>
                                                  <td>
                                                  <?= getChambreName($result['chambre']) . " Lit : ". getLitName($result['lit']) ?>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    Date liberation
                                                  </td>
                                                  <td>
                                                    <?= $result['datesort'] ?>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane" role="tabpanel" >
                                        <h3>Consultation lors de cette hospitalisation</h3>
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-pane" role="tabpanel">
                                        <h3>Prestention lors de cette hospitalisation</h3>

                                    </div>
                                    <div id="tab-4" class="tab-pane" role="tabpanel">
                                        <h3>Examen Laboratoire</h3>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <table class="table table-striped">
                                              <thead>
                                                <tr>
                                                  <th>
                                                    Date examen
                                                  </th>
                                                  <th>
                                                    Type examen
                                                  </th>
                                                  <th>
                                                    diagnostic
                                                  </th>
                                                  <th>
                                                    Medecin traitant
                                                  </th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                </tr>
                                                <tr>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                    </div>
                                    <div id="tab-5" class="tab-pane" role="tabpanel">
                                        <h3>Ordonnance</h3>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <table class="table table-striped">
                                              <thead>
                                                <tr>
                                                  <th>
                                                    Date prescription
                                                  </th>
                                                  <th>
                                                    Prescrit par
                                                  </th>
                                                  <th></th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                  <td>
                                                    <a href="" class="btn btn-warning btn-sm">Voir</a>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                  <td>
                                                    <a href="" class="btn btn-warning btn-sm">Voir</a>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
        <?php
    }
?>
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
        $(document).ready(function() {
            
            

            // SmartTab initialize
            $('#smarttab').smartTab({
                selected: 0, 
                theme:'default',
                orientation:'horizontal',
                justified:false,
                autoAdjustHeight:true,
                backButtonSupport:true,
                enableURLhash:true,
                transition: {
                animation:'slide-horizontal',
                speed:'400',
                easing:''
            },
            autoProgress: {
              enabled:false,
              interval: 3500,
              stopOnFocus:true
            }
            });


            // Demo Button Events
            $("#got_to_tab").on("change", function() {
                // Go to tab
                var tab_index = $(this).val() - 1;
                $('#smarttab').smartTab("goToTab", tab_index);
                return true;
            });

            $("#is_vertical").on("click", function() {
                // Change Orientation
                var options = {
                  orientation: ($(this).prop("checked") == true) ? 'vertical' : 'horizontal'
                };
                $('#smarttab').smartTab("setOptions", options);
                return true;
            });

            $("#animation").on("change", function() {
                // Change theme
                var options = {
                  transition: {
                      animation: $(this).val()
                  },
                };
                $('#smarttab').smartTab("setOptions", options);
                return true;
            });

            $("#theme_selector").on("change", function() {
                // Change theme
                var options = {
                  theme: $(this).val()
                };
                $('#smarttab').smartTab("setOptions", options);
                return true;
            });

        });
    </script>
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>
