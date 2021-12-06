<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
<?php
$code=$_GET['code_op'];
$info=$bdd->query("SELECT * FROM patients WHERE code_op like('$code')");
$info_cli=$info->fetch();
//a mettre dans un model a refactore
$info_paiement=$bdd->query("SELECT montant_cdf,montant_usd FROM caisse WHERE code_op like('$code')");
$sum_paiement_cdf=0;
$sum_paiement_usd=0;
while($montant=$info_paiement->fetch()){
  $sum_paiement_cdf+=$montant['montant_cdf'];
  $sum_paiement_usd+=$montant['montant_usd'];
}
$info_prestation=$bdd->query("SELECT price FROM mouvement WHERE code_op like('$code')");
$sum_prestation=0;
while($montant_preste=$info_prestation->fetch()){
  $sum_prestation+=$montant_preste['price'];
}
?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
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
                  <h4 class="card-title">Montant deja payer(<?=$sum_paiement_usd?> $) </h4>
                  <h4 class="card-title">Montant Prester(<?=$sum_prestation?> ) </h4>
                  <h4 class="card-title">Montant Solde(<?=$sum_paiement_usd-$sum_prestation?> $) </h4>
                  <p class="card-description">
                    #CodeOp:Client( <span class="codeop_fact"><?=$info_cli['patient_code']?>)</span><br><br>
                    <form action="" method="post">
                      <input type="text" name="fact_prod" readonly value="<?=$info_cli['code_op']?>">
                      <button> Produire la facture</button>
                    </form>
                  </p>
                </div>
              </div>
            </div>
        </div>
        <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#OpCode</th>
                          <th>Libelle</th>
                          <th>Prix</th>
                         
                        </tr>
                      </thead>
           <?php 
              $prestaion=$bdd->query("SELECT * FROM mouvement WHERE code_op like('$code')");
                    while($res=$prestaion->fetch()){
                        $id=$res['id_service'];
                    ?>
                      <tbody>
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
        </div>
        </div>
    </div>
    </div>
    </div>
    <!-- content-wrapper ends -->

  
    <?php
       if(isset($_POST['fact_prod'])){
        $code=$_POST['fact_prod'];
        $info=$bdd->query("SELECT * FROM patients WHERE code_op like('$code')");
        $info_cli=$info->fetch();
        //a mettre dans un model a refactore
        $info_paiement=$bdd->query("SELECT montant_cdf,montant_usd FROM caisse WHERE code_op like('$code')");
        $sum_paiement_cdf=0;
        $sum_paiement_usd=0;
        while($montant=$info_paiement->fetch()){
          $sum_paiement_cdf+=$montant['montant_cdf'];
          $sum_paiement_usd+=$montant['montant_usd'];
        }
        $info_prestation=$bdd->query("SELECT price FROM mouvement WHERE code_op like('$code')");
        $sum_prestation=0;
        while($montant_preste=$info_prestation->fetch()){
          $sum_prestation+=$montant_preste['price'];
        }
         
        $solde= $sum_prestation-$sum_paiement_usd;
        if($solde==0){
          $remise=0;
        }
        //generation du codefacure
        $code_fac=$bdd->query("SELECT id FROM facturation ORDER BY id DESC LIMIT 1");
        $id_fact=$code_fac->fetch();
         $codefact='FAC'.date('m/Y').$id_fact['id'].'/P';
         $upd=$bdd ->query("UPDATE  facturation SET code_facture='$codefact',status='1',remise='$remise',montant_prester='$sum_prestation',montant_payer='$sum_paiement_usd' WHERE code_op='$code'") or die(print_r($bdd->error_info()));
         $upd=$bdd ->query("UPDATE  patients SET code_op='',status='1' WHERE code_op='$code'") or die(print_r($bdd->error_info()));
         $upd=$bdd ->query("UPDATE  mouvement SET code_facture='$codefact',etat_paiement='1' WHERE code_op='$code'") or die(print_r($bdd->error_info()));
      }
        ?>
    <?php include('../partials/_footer.php')?>
