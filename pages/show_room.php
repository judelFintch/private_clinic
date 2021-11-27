<?php include('../partials/app.php')?>
<?php include('../confg/Connexion.php')?>
<?php include('../model/Chambremodel.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Toutes les chambres</h4>
                        <div class="d-flex">
                            <a href="creat_room.php" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Ajouter une chambre</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>
                              #N
                            </th>
                            <th>
                             Code
                            </th>
                            <th>
                             Type Chambre
                            </th>
                            <th>
                              Prix
                            </th>
                            <th>
                              Details
                            </th>

                            <th>
                              Operation
                            </th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $rooms=select_room();
                        $count=0;
                        while($room=$rooms->fetch()){
                          $count++;
                          echo'
                            <tr>
                              <td>
                              '.$count.'
                              </td>
                              <td>
                              '.$room['room_code'].'
                              </td>
                              <td>
                              '.$room['room_type'].'
                              </td>
                              <td>
                              '.$room['room_price'].'
                              </td>
                              <td>
                              '.$room['room_details'].'
                              </td>

                              <td>
                              <a href="details_room.php?id='.$room['id'].'">Voir</a>
                              </td>
                            </tr>';
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                    </div>
    <!-- content-wrapper ends -->
    <?php include('../partials/_footer.php')?>
