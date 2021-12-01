<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
<?php $info_cli=select_by_id($_GET['code'])?>
<div class="code_patient"> <?=$info_cli['patient_code']?></div>
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
                        <h4 class="card-title">Operation Caisse</h4>
                        <div class="d-flex align-items-center">
                            <a href="show_hospitalisation.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <hr>
                    
                    <div class="d-flex align-items-center mb-3 mt-2">
                    <button class="btn int_caisse btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Entree</button>
                        <a href="edit_hospitalisation.php?id=" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Depense</a>
                        <a href="show_caisse.php" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Rapport</a>
                        <button class="btn all_prestation btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Suivis de prestations</button>
                    </div>
                  <section class="form_caisse">
                    <form class="forms-sample row" method="POST" action="../controlleur/CaisseController.php">
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label >Patient</label>
                                <?php
                                $code=$_GET['code'];
                                  $patients=$bdd ->query("SELECT * FROM patients WHERE patient_code like('$code')") or die(print_r($bdd->error_info()));
                                ?>
                                <select name="patient" class="form-control form-control-sm">
                                  <?php
                                  while ($patient = $patients->fetch()){
                                    ?>
                                    <option value="<?= $patient['id'] ?>"><?= $patient['nom'] ." ".$patient['postnom']. " ".$patient['presnom'] ?> </option>
                                    <?php
                                  }
                                  ?>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Date </label>
                                <input type="date" name="date" class="form-control form-control-sm" placeholder="date">
                            </div>
                            
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Devise</label>
                                <select class="form-control form-control-sm"  name="devise">
                                    <option>USD</option>
                                    <option>CDF</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Montant</label>
                                <input type="text" name="montant" class="form-control form-control-sm" placeholder="montant">
                            </div>
                           
                        </div>
                        <div class="col-md-6">             
                            
                            
                        </div>
                        <div class="col-md-12">
                            <button name="btn_caisse" type="submit" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
                            <button class="btn btn-light btn-sm">Annuler</button>
                        </div>
                    </form>
                  </div>
                                </section>
                  <div class="result_insert"></div>

                  </div>
 <script>
$('.int_caisse').click(function(){
  $('.form_caisse').show();
  $('.int_caisse').hide();
});
$('.insertOp').click(function(){
var prestation=$('.acte').val();
var code_patient=$('.code_patient').html();
$.post('../controlleur/InsertOpController.php',{prestation:prestation,code_patient:code_patient},function(retourVerification){
      if(retourVerification==true){
        $.post('../controlleur/InsertOpController.php',{selectService:true,code_patient:code_patient},function(data){
          $('.result_insert').html(data);
          $('.acte').val('');
        });
      }else{
        alert('error insert');
      }
});
});
$('.all_prestation').click(function(){
  $('.form_caisse').hide();
  var prestation=$('.acte').val();
  var code_patient=$('.code_patient').html();
  
  $.post('../controlleur/__prestationController.php',{select_all:true,code_patient:code_patient},function(data){
    $('.result_insert').empty().html(data);

  });

});
        
</script>
    <?php include('../partials/_footer.php')?>
