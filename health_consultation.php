<!DOCTYPE html>
<html>

<head>
  <title>BMHMS - Resident Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/font-awesome/css/all.css">
  <link rel="stylesheet" rel="text/css" href="dashboard_style.css">
  <link rel="icon" href="images\macawayan logo.png">

</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12  d-flex flex-row align-items-center justify-content-between header">
        <div class=" d-flex flex-row align-items-center title">
          <img src="images/macawayan logo.png" alt="irosin logo">
          <p class="navbar-brand">BMHMS</p>
        </div>
        <div class="position-relative d-flex align-items-center account">
          <p class="user-name"><u>Juan Dela Cruz</u><br>NURSE</P>
          <img src="images/profile.jpeg" alt="">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 sidebar">
        <div class="d-grid flex-column menu-sidebar">
          <a class="active" href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a>
          <a href="#"><i class="fas fa-map-marker-alt"></i>Purok</a>
          <a href="#"><i class="fas fa-child"></i>Family Numbering</a>
          <a href="#"><i class="fas fa-capsules"></i>Medicine Request</a>
          <a href="#"><i class="fas fa-file-alt"></i>Reports</a>
          <a href="#"><i class="fas fa-address-card"></i>Manage Account</a>
        </div>
        <div class="position-relative d-grid flex-column log-out">
          <a href="index.php" class="log-out"><i class="fas fa-sign-out-alt"></i>Log Out</a>
        </div>
      </div>

      <div class="col-md-9 content">
        <div class="d-flex flex-row justify-content-between align-items-center dbres-profile ">
          <div class="res-prof"><a href="dashboard.php"><i class="fas fa-chevron-left"></i></a>Health Consultation</div>
          <form class="dbres-search">
            <input class="dbres-input" placeholder="Search...">
            <button class="dbres-searchbtn" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>

        <div class="container position-relative d-flex flex-row  resident-list">
          <div class="col-9 res-list">
            <div class="res-account">
              <div class="d-flex  justify-content-between res-info">
                <p class="acc-info">NAME: </p>
                <p class="acc-info">DATE: </p>
              </div>
              <div class="d-flex res-info">
                <p class="acc-info">TYPE OF CONSULTATION: </p>
              </div>
              <div class="d-flex justify-content-between res-info">
                <p class="acc-info">PUROK: </p>
                <p class="acc-info"> FAMILY HEAD.: </p>

                <!-- Button trigger modal -->
                <button type="button" class="acc-info-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"> See more... </button>

                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">HEALTH CONSULTATION INFORMATION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="d-flex flex-wrap add-consultation">

                          <div class="con-info d-flex flex-wrap justify-content-center">
                            <div class="d-flex consultation-info">
                              <div class="input-box-name">
                                <div class="details">NAME:</div>
                                <input type="text" placeholder="" required>
                              </div>
                            </div>
                            <div class="flex-wrap d-flex consultation-acc">
                              <div class="input-box">
                                <div class="details">RESIDENT ID NO.:</div>
                                <input type="text" placeholder="" required>
                              </div>
                              <div class="input-box">
                                <div class="details">FAMILY HEAD:</div>
                                <input type="text" placeholder="" required>
                              </div>
                            </div>
                          </div>

                          <div class="d-grid flex-wrap align-items-center consult-acc-srch">
                            <input class="dbcon-input" placeholder="Search name of resident...">
                            <button class="dbcon-searchbtn" type="submit"><i class="fas fa-search"></i></button>
                          </div>

                          <div class="d-flex flex-wrap consult-acc">
                            <div class="input-box">
                              <div class="details">TYPE OF CONSULTATION:</div>
                              <select type="text" placeholder="" required></select>
                            </div>
                            <div class="input-box">
                              <div class="details">HEIGHT.:</div>
                              <input type="text" placeholder="" required>
                            </div>
                            <div class="input-box">
                              <div class="details">WEIGHT:</div>
                              <input type="text" placeholder="" required>
                            </div>
                            <div class="input-box">
                              <div class="details">LMP:</div>
                              <input type="date" placeholder="">
                            </div>
                          </div>

                          <div class="d-flex flex-wrap consult-info">
                            <div class="input-box">
                              <div class="details">COMPLAINS:</div>
                              <textarea class="comment" placeholder="Type here..."></textarea>
                            </div>
                            <div class="input-box">
                              <div class="details">FINDINGS:</div>
                              <textarea class="comment" placeholder="Type here..."></textarea>
                            </div>
                            <div class="input-box">
                              <div class="details">DIAGNOSIS:</div>
                              <textarea class="comment" placeholder="Type here..."></textarea>
                            </div>
                            <div class="input-box">
                              <div class="details">TREATMENT:</div>
                              <textarea class="comment" placeholder="Type here..."></textarea>
                            </div>
                          </div>

                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-success">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-3 position-relative d-flex justify-content-center add-consult-modal">

            <div class=" d-grid add-consult-modal">

              <!-- Button trigger modal -->
              <button type="button" class="btn-add-db text-wrap" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"> <i class="fas fa-hand-holding-medical"></i> Add Consultation</button>

              <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">ADD CONSULTATION</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                      <form class="d-flex flex-wrap add-consultation">

                        <div class="con-info d-flex flex-wrap justify-content-center">
                          <div class="d-flex consultation-info">
                            <div class="input-box-name">
                              <div class="details">NAME:</div>
                              <input type="text" placeholder="" required>
                            </div>
                          </div>
                          <div class="flex-wrap d-flex consultation-acc">
                            <div class="input-box">
                              <div class="details">RESIDENT ID NO.:</div>
                              <input type="text" placeholder="" required>
                            </div>
                            <div class="input-box">
                              <div class="details">FAMILY HEAD:</div>
                              <input type="text" placeholder="" required>
                            </div>
                          </div>
                        </div>

                        <div class="d-grid flex-wrap align-items-center consult-acc-srch">
                          <input class="dbcon-input" placeholder="Search name of resident...">
                          <button class="dbcon-searchbtn" type="submit"><i class="fas fa-search"></i></button>
                        </div>

                        <div class="d-flex flex-wrap consult-acc">
                          <div class="input-box">
                            <div class="details">TYPE OF CONSULTATION:</div>
                            <select type="text" placeholder="" required></select>
                          </div>
                          <div class="input-box">
                            <div class="details">HEIGHT.:</div>
                            <input type="text" placeholder="" required>
                          </div>
                          <div class="input-box">
                            <div class="details">WEIGHT:</div>
                            <input type="text" placeholder="" required>
                          </div>
                          <div class="input-box">
                            <div class="details">LMP:</div>
                            <input type="date" placeholder="">
                          </div>
                        </div>

                        <div class="d-flex flex-wrap consult-info">
                          <div class="input-box">
                            <div class="details">COMPLAINS:</div>
                            <textarea class="comment" placeholder="Type here..."></textarea>
                          </div>
                          <div class="input-box">
                            <div class="details">FINDINGS:</div>
                            <textarea class="comment" placeholder="Type here..."></textarea>
                          </div>
                          <div class="input-box">
                            <div class="details">DIAGNOSIS:</div>
                            <textarea class="comment" placeholder="Type here..."></textarea>
                          </div>
                          <div class="input-box">
                            <div class="details">TREATMENT:</div>
                            <textarea class="comment" placeholder="Type here..."></textarea>
                          </div>
                        </div>
                      </form>
                    </div>


                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-success">Add Consultation</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END MOOOOOOOOOODAL -->
            </div>

          </div>

          <!-- END MOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOODAL -->
        </div>
      </div>


    </div>
    <!--row end-->

    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>