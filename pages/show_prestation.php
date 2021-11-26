<?php include('../partials/app.php')?>
<body>
<?php include('../partials/header_menu.php')?>
<?php include('../partials/left_menu.php')?>
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Liste medecin</h4>
                        <div class="d-flex">
                            <a href="./nouveaumedecin.html" class="btn btn-primary btn-sm"> <span class="icon icon"></span>Nouveau</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>
                              #
                            </th>
                            <th>
                              Patient
                            </th>
                            <th>
                              Date
                            </th>
                            <th>
                              Heure arriveée
                            </th>
                            <th>
                                Motif visite
                            </th>
                            <th>
                                Statut
                            </th>
                            <th>
                               Heure prise en charge
                            </th>
                            <th>
                                Prise en charge par
                             </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="py-1">
                              1
                            </td>
                            <td>
                              Irung Murund Rodrigue
                            </td>
                            <td>
                                12 janvier 2021
                            </td>
                            <td>
                                12:12
                            </td>
                            <td>
                                RDV
                            </td>
                            <td>
                                <label class="badge badge-danger">En attente</label>
                            </td>
                            <td> -
                            </td>
                            <td> -
                            </td>

                          </tr>
                          <tr>
                            <td class="py-1">
                                1
                              </td>
                              <td>
                                Irung Murund Rodrigue
                              </td>
                              <td>
                                  12 janvier 2021
                              </td>
                              <td>
                                  11:12
                              </td>
                              <td>
                                  Consultation
                              </td>
                              <td>
                                <label class="badge badge-success">Terminée</label>
                              </td>
                              <td>
                                  13:14
                              </td>
                              <td>
                                  Dr Gregoire
                              </td>
                          </tr>
                          <tr>
                            <td class="py-1">
                                1
                              </td>
                              <td>
                                Irung Murund Rodrigue
                              </td>
                              <td>
                                  12 janvier 2021
                              </td>
                              <td>
                                  11:12
                              </td>
                              <td>
                                  Consultation
                              </td>
                              <td>
                                <label class="badge badge-success">Terminée</label>
                              </td>
                              <td>
                                  13:14
                              </td>
                              <td>
                                  Dr Gregoire
                              </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    </div>
    <!-- content-wrapper ends -->
<?php include('../partials/_footer.php')?>