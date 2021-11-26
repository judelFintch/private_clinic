<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./../vendors/feather/feather.css">
  <link rel="stylesheet" href="./../vendors/ti-icons/css/themify-icons.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="./../vendors/ti-icons/css/themify-icons.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./../images/favicon.png" />
  <style>
      .btn
      {
          border-radius: 5px !important;
      }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="./../index.html"><img src="./../images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="./../index.html"><img src="./../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="./../index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-chambre" aria-expanded="false" aria-controls="ui-chambre">
                <i class="icon-clipboard menu-icon"></i>
                <span class="menu-title">Chambre</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-chambre">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Ajouter</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Liste</a></li>
                </ul>
              </div>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-consul" aria-expanded="false" aria-controls="ui-consul">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Consultation</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-consul">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="">Ajouter</a></li>
                  <li class="nav-item"><a class="nav-link" href="">Liste</a></li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-hospi" aria-expanded="false" aria-controls="ui-hospi">
                <i class="icon-ribbon menu-icon"></i>
                <span class="menu-title">Hospitalisation</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-hospi">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="./n_hospi.html">Ajouter</a></li>
                  <li class="nav-item"> <a class="nav-link" href="./hospitalisation.html">Liste</a></li>
                </ul>
              </div>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-pat" aria-expanded="false" aria-controls="ui-pat">
                <i class="icon-ribbon menu-icon"></i>
                <span class="menu-title">Patient</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-pat">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="./nouveaupatient.html">Ajouter</a></li>
                  <li class="nav-item"> <a class="nav-link" href="./patient.html">Liste</a></li>
                </ul>
              </div>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-med" aria-expanded="false" aria-controls="ui-med">
                <i class="icon-ribbon menu-icon"></i>
                <span class="menu-title">Medecin</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-med">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="views/nouveaumedecin.php">Ajouter</a></li>
                  <li class="nav-item"> <a class="nav-link" href="./Medecin.html">Liste</a></li>
                </ul>
              </div>
            </li>
          </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Nouveau Medecin</h4>
                        <div class="d-flex">
                            <a href="./Medecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Retour</a>
                        </div>
                    </div>
                    <form action= "controlleur/medecincontroller.php" method="post"class="forms-sample row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Nom</label>
                                <input type="text" name="nom" class="form-control form-control-sm" placeholder="Ex : Katembue">
                            </div>
                            <div class="form-group">
                                <label >Post-Nom</label>
                                <input type="text" name="postnom" class="form-control form-control-sm" placeholder="Ex : Mpunda">
                            </div>
                            <div class="form-group">
                                <label >Prénom</label>
                                <input type="text" name="prenom" class="form-control form-control-sm" placeholder="Ex : John">
                            </div>
                            <div class="form-group">
                                <label>Date de naissance</label>
                                <input type="date" name="datenaiss" class="form-control form-control-sm" placeholder="01-04-2000">
                            </div>
                            <div class="form-group">
                                <label >Genre</label>
                                <select class="form-control form-control-sm" name="genre">
                                    <option>Selectionnez le genre du medecin</option>
                                    <option>Homme</option>
                                    <option>Femme</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Uploader image</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info form-control-sm" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary btn-sm" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Type medecin</label>
                                <select class="form-control form-control-sm" name="typemedecin">
                                    <option>Selectionnez type medecin</option>
                                    <option>Generaliste</option>
                                    <option>Specialiste</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label >Role du medecin</label>
                                <select class="form-control form-control-sm" name="role">
                                    <option>Selectionnez le role du medecin</option>
                                    <option>Visiteur</option>
                                    <option>Permanant</option>
                                  </select>
                            </div>
                            <div class="form-group" name="tel">
                                <label >Téléphone</label>
                                <input type="number" class="form-control form-control-sm" placeholder="Numero tel du patient">
                            </div>
                            <div class="form-group" name="email">
                                <label >G-Mail</label>
                                <input type="mail" class="form-control form-control-sm" placeholder="johndoe@gmail.com">
                            </div>
                            <div class="form-group" name="adresse">
                                <label >Adresse</label>
                                <input type="mail" class="form-control form-control-sm" placeholder="ex : Lubumbashi, Commune annexe Quatier kasapa, Rue ...">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name ="btn_enregistrer" class="btn btn-primary btn-sm mr-2">Enregistrer</button>
                            <button class="btn btn-light btn-sm">Annuler</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="./../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./../js/off-canvas.js"></script>
  <script src="./../js/template.js"></script>
  <script src="./../js/settings.js"></script>
  <!-- endinject -->
  <script src="./../../js/file-upload.js"></script>

  <!-- End custom js for this page-->
</body>

</html>

