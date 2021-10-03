<!DOCTYPE html>
<html>

<head>
  <title>BMHMS - Purok</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/font-awesome/css/all.css">
  <link rel="stylesheet" rel="text/css" href="dashboard_style.css">
  <link rel="stylesheet" rel="text/css" href="purok.css">
  <link rel="icon" href="images\macawayan logo.png">

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 d-flex flex-row align-items-center justify-content-between header">
        <div class=" d-flex flex-row align-items-center title">
          <img src="images/macawayan logo.png" alt="irosin logo">
          <p class="navbar-brand">BMHMS</p>
        </div>
        <div class="d-flex position-relative align-items-center account">
          <p class="flex-shrink-1 user-name"><u>Juan Dela Cruz</u><br>NURSE</P>
          <img src="images/profile.jpeg" alt="">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 sidebar">
        <div class="d-grid flex-column menu-sidebar">
          <a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a>
          <a class="active" href="purok.php"><i class="fas fa-map-marker-alt"></i>Purok</a>
          <a href="fam_numbering.php"><i class="fas fa-child"></i>Family Numbering</a>
          <a href="med_request.php"><i class="fas fa-capsules"></i>Medicine Request</a>
          <a href="reports.php"><i class="fas fa-file-alt"></i>Reports</a>
          <a href="manage_account.php"><i class="fas fa-address-card"></i>Manage Account</a>
        </div>
        <div class="position-relative d-grid flex-column log-out">
          <a href="index.php" class="log-out"><i class="fas fa-sign-out-alt"></i>Log Out</a>
        </div>
      </div>

      <div class="col-md-9 content">
        <div class="purok-list">
          <!--modal start-->
        <button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
            PUROK <br> UNO
        </button>


        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">PUROK UNO LIST</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-block justify-content-center">
                        <div class="purok-family">
                            <p class="fam-no">FAMILY NO.:</p>
                            <P class="fam-head">FAMILY HEAD:</p>
                            <div class="text-end see-more">
                                <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop1SeeMore">
                                    See more...
                                </a>
                                <div class="modal fade" id="staticBackdrop1SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="purok-family-seemore">
                                                    <p class="text-start fam-head">FAMILY HEAD:</p>
                                                </div>

                                                <div class="purok-family-seemore">
                                                    <p class="text-start fam-head">FAMILY MEMBER:</p>
                                                    <center>
                                                    <table class="table table-bordered border-success  justify-content-center">
                                                      <thead class="bg-success">
                                                        <tr class="d-flex">
                                                          <th class="col">Resident ID. No</th>
                                                          <th class="col">NAME</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr class="d-flex">
                                                          <td class="col">data</td>
                                                          <td class="col">data</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </center>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
<!--modal end-->

<!--modal start-->
<button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
  PUROK <br> DOS
</button>


<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">PUROK DOS LIST</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-block justify-content-center">
              <div class="purok-family">
                  <p class="fam-no">FAMILY NO.:</p>
                  <P class="fam-head">FAMILY HEAD:</p>
                  <div class="text-end see-more">
                      <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop2SeeMore">
                          See more...
                      </a>
                      <div class="modal fade" id="staticBackdrop2SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY HEAD:</p>
                                      </div>

                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY MEMBER:</p>
                                          <center>
                                          <table class="table table-bordered border-success  justify-content-center">
                                            <thead class="bg-success">
                                              <tr class="d-flex">
                                                <th class="col">Resident ID. No</th>
                                                <th class="col">NAME</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr class="d-flex">
                                                <td class="col">data</td>
                                                <td class="col">data</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </center>

                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
<!--modal end-->


<!--modal start-->
<button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
  PUROK <br> TRES
</button>


<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">PUROK TRES LIST</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-block justify-content-center">
              <div class="purok-family">
                  <p class="fam-no">FAMILY NO.:</p>
                  <P class="fam-head">FAMILY HEAD:</p>
                  <div class="text-end see-more">
                      <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop3SeeMore">
                          See more...
                      </a>
                      <div class="modal fade" id="staticBackdrop3SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY HEAD:</p>
                                      </div>

                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY MEMBER:</p>
                                          <center>
                                          <table class="table table-bordered border-success  justify-content-center">
                                            <thead class="bg-success">
                                              <tr class="d-flex">
                                                <th class="col">Resident ID. No</th>
                                                <th class="col">NAME</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr class="d-flex">
                                                <td class="col">data</td>
                                                <td class="col">data</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </center>

                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
<!--modal end-->


<!--modal start-->
<button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
  PUROK <br> CUATRO
</button>


<div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">PUROK CUATRO LIST</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-block justify-content-center">
              <div class="purok-family">
                  <p class="fam-no">FAMILY NO.:</p>
                  <P class="fam-head">FAMILY HEAD:</p>
                  <div class="text-end see-more">
                      <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop4SeeMore">
                          See more...
                      </a>
                      <div class="modal fade" id="staticBackdrop4SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY HEAD:</p>
                                      </div>

                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY MEMBER:</p>
                                          <center>
                                          <table class="table table-bordered border-success  justify-content-center">
                                            <thead class="bg-success">
                                              <tr class="d-flex">
                                                <th class="col">Resident ID. No</th>
                                                <th class="col">NAME</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr class="d-flex">
                                                <td class="col">data</td>
                                                <td class="col">data</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </center>

                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
<!--modal end-->


<!--modal start-->
<button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
  PUROK <br> CINCO
</button>


<div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">PUROK CINCO LIST</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-block justify-content-center">
              <div class="purok-family">
                  <p class="fam-no">FAMILY NO.:</p>
                  <P class="fam-head">FAMILY HEAD:</p>
                  <div class="text-end see-more">
                      <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop5SeeMore">
                          See more...
                      </a>
                      <div class="modal fade" id="staticBackdrop5SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY HEAD:</p>
                                      </div>

                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY MEMBER:</p>
                                          <center>
                                          <table class="table table-bordered border-success  justify-content-center">
                                            <thead class="bg-success">
                                              <tr class="d-flex">
                                                <th class="col">Resident ID. No</th>
                                                <th class="col">NAME</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr class="d-flex">
                                                <td class="col">data</td>
                                                <td class="col">data</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </center>

                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
<!--modal end-->

<!--modal start-->
<button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
  PUROK <br> SAIS
</button>


<div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">PUROK SAIS LIST</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-block justify-content-center">
              <div class="purok-family">
                  <p class="fam-no">FAMILY NO.:</p>
                  <P class="fam-head">FAMILY HEAD:</p>
                  <div class="text-end see-more">
                      <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop6SeeMore">
                          See more...
                      </a>
                      <div class="modal fade" id="staticBackdrop6SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY HEAD:</p>
                                      </div>

                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY MEMBER:</p>
                                          <center>
                                          <table class="table table-bordered border-success  justify-content-center">
                                            <thead class="bg-success">
                                              <tr class="d-flex">
                                                <th class="col">Resident ID. No</th>
                                                <th class="col">NAME</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr class="d-flex">
                                                <td class="col">data</td>
                                                <td class="col">data</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </center>

                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
<!--modal end-->


<!--modal start-->
<button type="button" class="btn-purok-list btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
  PUROK <br> SIETE
</button>


<div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">PUROK SAIS LIST</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-block justify-content-center">
              <div class="purok-family">
                  <p class="fam-no">FAMILY NO.:</p>
                  <P class="fam-head">FAMILY HEAD:</p>
                  <div class="text-end see-more">
                      <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdrop7SeeMore">
                          See more...
                      </a>
                      <div class="modal fade" id="staticBackdrop7SeeMore" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">FAMILY NO.:</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY HEAD:</p>
                                      </div>

                                      <div class="purok-family-seemore">
                                          <p class="text-start fam-head">FAMILY MEMBER:</p>
                                          <center>
                                          <table class="table table-bordered border-success  justify-content-center">
                                            <thead class="bg-success">
                                              <tr class="d-flex">
                                                <th class="col">Resident ID. No</th>
                                                <th class="col">NAME</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr class="d-flex">
                                                <td class="col">data</td>
                                                <td class="col">data</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </center>

                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">BACK</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
<hr>
<!--modal end-->
      </div>

      </div>
    </div>
  </div>

  <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>

<!--
<button type="button" class="btn-purok btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
    PUROK <br> UNO
</button>


<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">PUROK UNO LIST</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-block justify-content-center">
                <div class="d-inline purok-family">
                    <p class="fam-no">FAMILY NO.:</p>
                    <P class="fam-head">FAMILY HEAD:</p>
                    <div class="text-end see-more">
                        <a type="button" class="mr-5 btn-seemore" data-bs-toggle="modal" data-bs-target="#staticBackdropSeeMore">
                            See more...
                        </a>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
-->
