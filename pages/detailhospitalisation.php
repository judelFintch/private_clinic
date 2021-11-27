<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>

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
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Detail hospitalistion Numéro <?= $result['id'] ?></h4>
                        <div class="d-flex">
                            <a href="edit_hospitalisation.php?id=<?= $result['id'] ?>" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Editer</a>
                            <a href="liberepat.php?id=<?= $result['id'] ?>" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Liberer</a>
                        </div>
                    </div>
                    
                </div>
              </div>
          </div>
        </div>
        <?php
    }
?>
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>
