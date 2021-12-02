<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>

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
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Operation Caisse</h4>
                        <div class="d-flex align-items-center">
                            
                        </div>
                    </div>
                    <hr>
                    
                  <section class="form_caisse">
                    <form class="forms-sample row" method="POST" action="">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Motif depense</label>
                                <input type="text" name="libelle" class="form-control form-control-sm" placeholder="Libelle">
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
        //a refactorer
        if(isset($_POST['libelle'])){
          echo $libelle=$_POST['libelle'];
            $insert=$bdd->query("INSERT INTO compte_sorties VALUES('','$libelle')");
        }
        ?>
<?php include('../partials/_footer.php')?>
