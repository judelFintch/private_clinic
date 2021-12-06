<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ClinicSoft</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
<?php 
$code_impr=$_GET['code_impr'];
//info 
$facture=$bdd->query("SELECT * FROM  facturation WHERE code_op like('$code_impr')");
$info_fac=$facture->fetch();
$select_codep=$bdd->query("SELECT DISTINCT code_patient FROM mouvement WHERE code_op like('$code_impr')");
$code_patient=$select_codep->fetch();
 $info_cli=select_by_id($code_patient['code_patient']);

 $info_paiement=$bdd->query("SELECT montant_cdf,montant_usd FROM caisse WHERE code_op like('$code_impr')");
$sum_paiement_cdf=0;
$sum_paiement_usd=0;
while($montant=$info_paiement->fetch()){
 $sum_paiement_cdf+=$montant['montant_cdf'];
 $sum_paiement_usd+=$montant['montant_usd'];

}

$info_prestation=$bdd->query("SELECT price FROM mouvement WHERE code_patient like('$code_impr')");
$sum_prestation=0;
while($montant_preste=$info_prestation->fetch()){
  $sum_prestation+=$montant_preste['price'];
}



?>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> ClinicSoft, Logiciel.
          <small class="float-right">Date: <?=date('d-m-y')?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Clinic Baum De Galaad,.</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (804) 123-5432<br>
          Email: info@almasaeedstudio.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong><?=$info_cli['nom']?> - <?=$info_cli['postnom']?></strong><br>
          <?=$info_cli['nom']?><br>
          <?=$info_cli['presnom']?><br>
          Phone: <?=$info_cli['tel']?><br>
          Email: <?=$info_cli['email']?>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #<?=$code_impr?></b><br>
        <br>
        <b>Order ID:</b><?=$info_fac['code_facture']?><br>
        <b>Payment Due:</b> <?=$info_fac['date_op']?><br>
        <b>Caisse:</b>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
        <thead>
              <tr>
                <th>#OpCode</th>
                <th>Libelle</th>
                <th>Prix</th>
                
              </tr>
            </thead>
          <tbody>
  
          <?php 
              $prestaion=$bdd->query("SELECT * FROM mouvement WHERE code_op like('$code_impr')");
                    while($res=$prestaion->fetch()){
                        $id=$res['id_service'];
                    ?>
                        <tr>
                          <td>#<?=$res['code_op']?></td>
                          <td><?=$res['libelle']?></td>
                          <td class="text-success"> <?=$res['price']?> $ </i></td>
                        </tr>
                        <?php }?>
                        <tr>
                          <td>#<?=$res['code_op']?></td>
                          <td><?=$res['libelle']?></td>
                          <td class="text-danger"> <?=$sum_paiement_usd?> $</i></td>
                        </tr>
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment Methods:</p>
        <img src="dist/img/credit/visa.png" alt="Visa">
        <img src="dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="dist/img/credit/american-express.png" alt="American Express">
        <img src="dist/img/credit/paypal2.png" alt="Paypal">

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
         
        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Amount Due <?=$info_fac['date_op']?></p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td> $ <?=$sum_paiement_usd?></td>
            </tr>
            <tr>
              <th>Tax (0.0%)</th>
              <td>$0.0</td>
            </tr>
            
            <tr>
              <th>Total:</th>
              <td>$ <?=$sum_paiement_usd?></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
