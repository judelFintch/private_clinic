<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/patientsmodel.php')?>
<body>


<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
      <div class="main-panel">
      <?php $info_cli=select_by_id($_GET['code'])?>
      <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">





            
              
                <div class="card">
                  <div class="card-body">
                    
                 
              <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?=$info_cli['nom']?> <?=$info_cli['postnom']?></h4>
                  <p class="card-description">
                    Use <code>&lt;<?=$info_cli['nom']?> <?=$info_cli['postnom']?>&gt;</code> tag
                  </p>
                  <div class="row">
                    <div class="col-md-12">
                      <address>
                        <p class="font-weight-bold"><?=$info_cli['tel']?> <?=$info_cli['situation']?>.</p>
                        <p>
                        <?=$info_cli['tel']?>
                        </p>
                        <p>
                        <?=$info_cli['tel']?>
                        </p>
                        <p>
                        <?=$info_cli['tel']?>
                        </p>
                      </address>
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


<h1>Welcome to jQuery UI!</h1>

<div class="ui-widget">
	<p>This page demonstrates the widgets and theme you selected in Download Builder. Please make sure you are using them with a compatible jQuery version.</p>
</div>

<h1>YOUR COMPONENTS:</h1>



<!-- Autocomplete -->
<h2 class="demoHeaders">Autocomplete</h2>
<div>
	<input id="autocomplete" title="type &quot;a&quot;">
</div>
<script>
$( "#accordion" ).accordion();

$( "#autocomplete" ).autocomplete({
    source: availableTags
});

</script>


<script src="../__js/__first_op_patient.js"></script>
<?php include('../partials/_footer.php')?>