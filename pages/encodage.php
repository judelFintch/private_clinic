<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
<?php $info_cli=select_by_id($_GET['code'])?>
<div class="code_patient"> <?=$info_cli['patient_code']?></div>
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
                        <h4 class="card-title">MOTIF DE LA VISITE(Patient nom)</h4>
                        <div class="d-flex align-items-center">
                            <a href="show_hospitalisation.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3 mt-2">
                        <a  href="#" data-modal-id="ordonnance" class="btn btn-primary btn-sm js-open-modal mr-2"> <span class="icon-plus"></span>Consultation</a>
                        <a href="edit_hospitalisation.php?id=" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Laboratoire</a>
                        <a href="edit_hospitalisation.php?id=" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Pharmacie</a>
                        <a href="edit_hospitalisation.php?id=" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> Echo</a>
                        <a href="edit_hospitalisation.php?id=" class="btn btn-primary btn-sm mr-2"> <span class="icon-plus"></span> RX</a>
                    </div>
                    <hr>

                    <div class="row">
                    <div class="col-md-8">

                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="acte form-control"  id="autocomplete" placeholder="Actes Medical, Laboratoire, Nursing, Phamarcie, Radio" aria-label="Recipient's username">
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary insertOp" type="button">Valider</button>
                      </div>
                    </div>
                  </div>    
                    <hr>  
                  </div>
                  
                </div>
                <div class="result_insert"></div>
              </div>
              </div>
              </div></div>
              </div>
    

<script>
$( "#autocomplete" ).autocomplete({
  source: '../model/__prestation.php'
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
</script>
<?php include('../partials/_footer.php')?>