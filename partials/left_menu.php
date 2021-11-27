<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="show_waiting_line.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">File d'attente</span>
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
                <li class="nav-item"> <a class="nav-link" href="creat_room.php">Ajouter Chambre</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_room.php">Liste Chambre</a></li>
                <li class="nav-item"> <a class="nav-link" href="creat_bed.php">Ajouter lit</a></li>
               
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
                <li class="nav-item"> <a class="nav-link" href="creat_hospitalisation.php">Hospitaliser</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_hospitalisation.php">Suivis </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="creat_patient.php">Ajouter</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_patient.php">Liste</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="creatMedecin.php">Ajouter</a></li>
                <li class="nav-item"> <a class="nav-link" href="showMedecin.php">Liste</a></li>
              </ul>
            </div>
          </li>

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
              <span class="menu-title">Rendez-vous</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-rdv">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="creat_rdz.php">Ajouter</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_rdz.php">Liste</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="creat_prestation.php">Ajouter</a></li>
                <li class="nav-item"> <a class="nav-link" href="show_prestation.php">Liste</a></li>
              </ul>
            </div>
          </li>

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
          
        </ul>
      </nav>
      <!-- partial -->