<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>

<?php
// a mettre dans un model a refactore
$info_paiement=$bdd->query("SELECT * FROM caisse ");
$sum_paiement_cdf=0;
$sum_paiement_usd=0;
while($montant=$info_paiement->fetch()){
  $sum_paiement_cdf+=$montant['montant_cdf'];
  $sum_paiement_usd+=$montant['montant_usd'];
}
$info_depense=$bdd->query("SELECT * FROM sorties ");
$sum_depense_cdf=0;
$sum_depense_usd=0;
while($montant_dep=$info_depense->fetch()){
  $sum_depense_cdf+=$montant_dep['montant_cdf'];
  $sum_depense_usd+=$montant_dep['montant_usd'];
}
//selection motif depense
  $select_depense=$bdd->query("SELECT * FROM compte_sorties	");
/*$info_prestation=$bdd->query("SELECT price FROM mouvement WHERE code_patient like('$code')");
$sum_prestation=0;
while($montant_preste=$info_prestation->fetch()){
  $sum_prestation+=$montant_preste['montant'];
}*/
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
        <a href="show_patient.php" class="btn btn-danger btn-sm mr-2"> <span class="icon-plus"></span>ENCOURS DE TRAITEMENT </a>
        <a href="show_caisse.php" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span>MES RAPPORTS</a>
        <a href="motif_depense.php" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span>OPTIONS DEPENSES</a>
        <hr>
        <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <p class="card-description">
                    <h3>TOTAL ENTREE</h3>
                      Total CDF <?=$sum_paiement_cdf?> CDF<br>
                      Total USD <?=$sum_paiement_usd?> USD<br>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                  <h3>TOTAL DEPENSES</h3>
                    Total CDF <span class="badjet badjet-danger"> <?=$sum_depense_cdf?> </span>CDF<br>
                    Total USD <span> <?=$sum_depense_usd?></span> USD<br>
                    </span>
                  </p>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-3 mt-2">
                    <button class="btn int_caisse btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Entree</button>
                    <button class="btn depense_caisse btn  btn-primary btn-sm mr-2"><span class="icon-plus"></span>  Depense</button>
                    </div>
          <!-- Section Entree -->
                  <section class="form_caisse">
                    <form class="forms-sample row" method="POST" action="../controlleur/CaisseController.php">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Patient</label>
                                <?php
                                  $patients=$bdd ->query("SELECT * FROM patients ") or die(print_r($bdd->error_info()));
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
                                <input type="text" readonly value=" <?=$date_day =date('d-m-Y');?>" name="date" class="form-control form-control-sm" placeholder="date">
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
                        
                        <div class="col-md-12">
                            <button name="btn_caisse" type="submit" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
                            <button class="btn btn-light btn-sm">Annuler</button>
                        </div>
                    </form>
                  </div>
                  </section>
                
                
          <!-- Fin section Entree-->
          <!-- Section Entree -->
          <section class="form_sortie">
                    <form class="forms-sample row" method="POST" action="">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Compte Sortie</label>
                                <select name="depense" class="form-control form-control-sm">
                                  <?php
                                  while ($depense=$select_depense->fetch()){
                                    ?>
                                    <option value="<?= $depense['libelle'] ?>"><?= $depense['libelle'] ?> </option>
                                    <?php
                                  }
                                  ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Date </label>
                                <input type="text" readonly value=" <?=$date_day =date('d-m-Y');?>" name="date" class="form-control form-control-sm" placeholder="date">
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

                        <div class="col-md-12">
                            <button name="btn_caisse" type="submit" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
                            <button class="btn btn-light btn-sm">Annuler</button>
                        </div>
                    </form>
                  </div>
                </section>
                <?php
                // a refactore-------------------------------------
                if(isset($_POST['depense'])){
                  $libelle=$_POST['depense'];
                  $devise=$_POST['devise'];
                  $date=$_POST['date'];
                  $montant=$_POST['montant'];
                  if($devise=='CDF'){
                    $insert=$bdd->query("INSERT INTO sorties VALUES('','0','$montant','$libelle',now(),'','2050')");  
                    }else{
                      $insert=$bdd->query("INSERT INTO sorties VALUES('','$montant','0','$libelle',now(),'','2050')");
                    }

                }
                //----------------------------a mettre correctement
                ?>
                  
      <script>
        //caisse option
        $('.form_sortie').hide();

        $('.depense_caisse').click(function(){
          $('.form_caisse').hide();
          $('.form_sortie').show();
        });

      $('.int_caisse').click(function(){
        $('.form_caisse').show();
        $('.form_sortie').hide();
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
