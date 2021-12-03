<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">U:(<?=$user?>)</span>
            </a>
          </li>
        <?php if($level>=6) {?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-ab" aria-expanded="false" aria-controls="ui-chambre">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Abonne</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-ab">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="creat_abonne.php">Ajouter Abonne</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_abonne.php">Liste </a></li>    
              </ul>
            </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="creat_agent.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Abonne</span>
            </a>
          </li>
          <?php }?>
        
  
          <?php if($level>=3 or $level>=6) {?>
          <li class="nav-item">
            <a class="nav-link" href="ma_caisse.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Caisse</span>
            </a>
          </li>
          <?php }?>
          <?php if($level>=4 or $level>=6) {?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-chambre" aria-expanded="false" aria-controls="ui-chambre">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Chambre</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-chambre">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="creat_room.php">Ajouter Chambre</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_room.php">Liste Chambre</a></li>
                <li class="nav-item"> <a class="nav-link" href="creat_bed.php">Ajouter lit</a></li>
              </ul>
            </div>
          </li>
          <?php }?>
          <?php if($level>=6) {?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-fdf" aria-expanded="false" aria-controls="ui-fdf">
              <i class="icon-clipboard menu-icon"></i>
              <span class="menu-title">Consultation</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-fdf">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="create_consultation.php">Consulter</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_consultation.php">Liste</a></li>
               
              </ul>
            </div>
          </li>

          <?php }?>
          <?php if($level==4) {?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-hospi" aria-expanded="false" aria-controls="ui-hospi">
              <i class="icon-ribbon menu-icon"></i>
              <span class="menu-title">Nursing</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-hospi">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="show_patient.php">Encodage</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_hospitalisation.php">Suivis </a></li>
              </ul>
            </div>
          </li>
          <?php }?>
          <?php if($level==7 or $level==1 or $level==2) {?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-hospi" aria-expanded="false" aria-controls="ui-hospi">
              <i class="icon-ribbon menu-icon"></i>
              <span class="menu-title">Hospitalisation</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-hospi">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="creat_hospitalisation.php">Hospitaliser</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_hospitalisation.php">Suivis </a></li>
              </ul>
            </div>
          </li>
          <?php }?>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-pat" aria-expanded="false" aria-controls="ui-pat">
              <i class="icon-ribbon menu-icon"></i>
              <span class="menu-title">Patient</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-pat">
              <ul class="nav flex-column sub-menu">
              <?php if($level==1 or $level==1) {?>
                <li class="nav-item"> <a class="nav-link" href="creat_patient.php">Ajouter</a></li>
                <?php }?>
                <li class="nav-item"> <a class="nav-link" href="show_patient.php">Voir</a></li>
              </ul>
            </div>
          </li>
         
          <?php if($level==7) {?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-med" aria-expanded="false" aria-controls="ui-med">
              <i class="icon-ribbon menu-icon"></i>
              <span class="menu-title">Medecin</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-med">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="creatMedecin.php">Ajouter</a></li>
                <li class="nav-item"> <a class="nav-link" href="showMedecin.php">Liste</a></li>
              </ul>
            </div>
          </li>
          <?php }?>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-serv" aria-expanded="false" aria-controls="ui-serv">
              <i class="icon-ribbon menu-icon"></i>
              <span class="menu-title">Service</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-serv">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="creat_service.php">Ajouter</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_service.php">Liste</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-rdv" aria-expanded="false" aria-controls="ui-rdv">
              <i class="icon-ribbon menu-icon"></i>
              <span class="menu-title">Prestation</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-rdv">
              <ul class="nav flex-column sub-menu">
              <?php if($level==7 or $level==7 ) {?>
                <li class="nav-item"> <a class="nav-link" href="creat_prestation.php">Ajouter</a></li>
                <?php }?>
                <li class="nav-item"> <a class="nav-link" href="show_prestation.php">Liste</a></li>
              </ul>
            </div>
          </li>
          <?php if($level==7) {?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-user" aria-expanded="false" aria-controls="ui-user">
              <i class="icon-ribbon menu-icon"></i>
              <span class="menu-title">Utilisateur</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="creat_user.php">Ajouter </a></li>
                <li class="nav-item"> <a class="nav-link" href="show_user.php">Voir</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_user.php">Ajouter un role</a></li>
              
              </ul>
            </div>
          </li>
          <?php }?>
          
        </ul>
      </nav>
      <!-- partial -->