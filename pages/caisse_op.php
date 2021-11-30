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

.modal-box {
  display: none;
  position: absolute;
  z-index: 1500;
  width: 98%;
  background: white;
  border-bottom: 1px solid #aaa;
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  border: 1px solid rgba(0, 0, 0, 0.1);
  background-clip: padding-box;
}
@media (min-width: 32em) {

.modal-box { width: 70%; }
}

.modal-box header,
.modal-box .modal-header {
  padding: 1.25em 1.5em;
  border-bottom: 1px solid #ddd;
}

.modal-box .modal-body { padding: 2em 1.5em; }

.modal-box footer,
.modal-box .modal-footer {
  padding: 1em;
  border-top: 1px solid #ddd;
  background: rgba(0, 0, 0, 0.02);
  text-align: right;
}

.modal-overlay {
  opacity: 0;
  filter: alpha(opacity=0);
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1400;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3) !important;
}
</style>


<div id="ordonnance" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
    <h3>Ordonnance</h3>
  </header>
  <div class="modal-body">
    <div class="row">
        
        <form>
            <table class="">

            </table>
            <div class="row">
               <div class="col-md-12">
                    <a href="show_hospitalisation.php" class="btn btn-primary btn-sm mr-2"> Apercu</a>
                    <button type="submit" class="btn btn-primary btn-sm mr-2">Sauvegarder</button>
                    <button type="submit" class="btn btn-danger btn-sm">Annuler</button>
               </div>
            </div>
        </form>
    </div>
  </div>
  <footer> <a href="#" class="btn btn-small js-modal-close">Close</a> </footer>
</div>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Nouvelle consultation</h4>
                        <div class="d-flex align-items-center">
                            <a href="show_hospitalisation.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3 mt-2">
                        <a  href="#" data-modal-id="ordonnance" class="btn btn-primary btn-sm js-open-modal mr-2"> <span class="icon-plus"></span> Ordonnance</a>
                        <a href="edit_hospitalisation.php?id=" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Arret de travail</a>
                        <a href="edit_hospitalisation.php?id=" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Billan</a>
                        <a href="edit_hospitalisation.php?id=" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Lettre orientation</a>
                        <a href="edit_hospitalisation.php?id=" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Certificat medical</a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="smarttab">
                                <ul class="nav">
                                    <li>
                                      <a class="nav-link" href="#tab-1">
                                        Info patient
                                      </a>
                                    </li>
                                    <li>
                                      <a class="nav-link" href="#tab-2">
                                        Consultation
                                      </a>
                                    </li>
                                    <li>
                                      <a class="nav-link" href="#tab-3">
                                        Paiement
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
                                                    
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                   Status
                                                  </td>
                                                  <td>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    Motif hospitalisation
                                                  </td>
                                                  <td>
                                                  
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    Medecin traitant
                                                  </td>
                                                  <td>
                                                  
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    Service
                                                  </td>
                                                  <td>
                                                    
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    Chambre et lit
                                                  </td>
                                                  <td>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    Date liberation
                                                  </td>
                                                  <td>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane" role="tabpanel" >
                                        <h3>Fiche consultation</h3>
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-pane" role="tabpanel">
                                        <h3>Paiement</h3>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <table class="table table-striped">
                                              <thead>
                                                <tr>
                                                  <th>
                                                    Selectionner
                                                  </th>
                                                  <th>
                                                    Service
                                                  </th>
                                                  <th>
                                                    Montant
                                                  </th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                </tr>
                                                <tr>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                  <td>12 novembre 2021</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                          <div class="col-md-12 mt-2">
                                              <div>Montant à verser</div>
                                              <div>Montant verser</div>
                                              <div>Reste</div>
                                          </div>
                                        </div>
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
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
       
       $(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
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
