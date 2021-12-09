<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
<?php $info_cli=select_by_id($_GET['code'])?>
<?php
$code_op=$info_cli['code_op'];
$code=$_GET['code'];
//a mettre dans un model a refactore
$info_paiement=$bdd->query("SELECT montant_cdf,montant_usd FROM caisse WHERE code_op like('$code_op')");
$sum_paiement_cdf=0;
$sum_paiement_usd=0;
while($montant=$info_paiement->fetch()){
 $sum_paiement_cdf+=$montant['montant_cdf'];
 $sum_paiement_usd+=$montant['montant_usd'];
}

$info_prestation=$bdd->query("SELECT price,qte FROM mouvement WHERE code_patient like('$code')");
$sum_prestation=0;
while($montant_preste=$info_prestation->fetch()){
  $sum_prestation+=$montant_preste['price']*$montant_preste['qte'];
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
      <div class="main-panel">
        <div class="content-wrapper">
        <a href="show_caisse.php" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span>MA CAISSE</a>
        <a href="show_caisse.php" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span>MES RAPPORTS</a>
        <hr>
        <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <span class="">
                      <b>Client ( <?=$info_cli['nom']?> - <?=$info_cli['postnom']?>)</b></span></h4>
                        <p class="card-description">
                        #CodClient:Client( <?=$info_cli['patient_code']?>)
                          #codeOp <span class="code_patient"><?=$info_cli['code_op']?></span><br>
                          #DateNaissance:Client( <?=$info_cli['datenaiss']?>)
                          <br>
                          #Sexe:Client( <?=$info_cli['genre']?>)
                          ( <?=$info_cli['situation']?>) <br>
                          <b>Hospitalisation:</b>
                          <span class="badje">
                            Non Hospitaliser
                          </span>
                        </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Montant deja payer(<?=$sum_paiement_usd?> $) Equivalant CDF</h4>
                  <h4 class="card-title">Montant Prester(<?=$sum_prestation?> $) Equivalant CDF</h4>
                  <h4 class="card-title">Montant Solde(<?=$sum_paiement_usd-$sum_prestation?> $) Equivalant CDF</h4>
                  <p class="card-description">
                    #CodeOp:Client( <span class="codeop_fact"><?=$info_cli['code_op']?>)</span><br><br>
                   <button class="btn btn-danger btn-sm mr-2 dmd_facture" value="">DEMANDE FACTURE POUR CLOTURE LE SOINS</button>
                    </span>
                  </p>
                 
                </div>
              </div>
            </div>
        </div>
        <div class="card dmd_facture_result"> 
          <div class="col-lg-8">
          <p class="alert alert-danger message_dmd">  Vous etes sur le points de demandez la facture finale pour le patient <?=$info_cli['nom']?> - <?=$info_cli['postnom']?>
           cliquez sur valider pour confirmer l'operation
           <button class="btn btn-success fact_dmd">Valider</button>
        </p>
        <p class="alert alert-success dmd_reussi">  
          Demande effectuee 
        </p>
        <p class="alert alert-danger dmd_echec">  
          Impossible d'effectuer cette operation une Demande est deja emcours
        </p>
          </div>
           </div>
        <br>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Operation Caisse</h4>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center mb-3 mt-2">
                    <button class="btn int_caisse btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Entree</button>
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
                                    <option value="<?= $patient['code_op'] ?>"><?= $patient['nom'] ." ".$patient['postnom']. " ".$patient['presnom'] ?> </option>
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
$('.message_dmd').hide();
$('.dmd_reussi').hide();
$('.dmd_echec').hide();

$('.dmd_facture').click(function(){
  //affichage du message
  $('.message_dmd').show();
});

$('.fact_dmd').click(function(){
  //affichage du message
  var code_patient=$('.code_patient').html();
   $.post('../model/__dmd_facture.php',{code_patient:code_patient},function(creat_dmd){
     if(creat_dmd==1){
      $('.dmd_reussi').show();
      $('.message_dmd').hide();
     }
     else{
      $('.dmd_echec').show();
      $('.message_dmd').hide();
     }
   });
 
});


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
  
  $.post('../controlleur/__prestationController.php',{select_all_caisse:true,code_patient:code_patient},function(data){
    $('.result_insert').empty().html(data);

  });

});
        
</script>
    <?php include('../partials/_footer.php')?>
