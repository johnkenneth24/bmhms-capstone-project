<!DOCTYPE html>
<html>

<head>
    <title>BMHMS - Family Numbering</title>
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
                    <a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a>
                    <a href="purok.php"><i class="fas fa-map-marker-alt"></i>Purok</a>
                    <a href="fam_numbering.php"><i class="fas fa-child"></i>Family Numbering</a>
                    <a class="active" href="med_request.php"><i class="fas fa-capsules"></i>Medicine Request</a>
                    <a href="reports.php"><i class="fas fa-file-alt"></i>Reports</a>
                    <a href="manage_account.php"><i class="fas fa-address-card"></i>Manage Account</a>
                </div>
                <div class="position-relative d-grid flex-column log-out">
                    <a href="index.php" class="log-out"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                </div>
            </div>

            <div class="col-md-9 content">
                <div class="d-flex flex-row justify-content-between align-items-center dbres-profile ">
                    <h3 class="mb-0">MEDICINE NEED TO BE REQUESTED</h3>
                    <form class="dbres-search">
                        <input class="dbres-input" placeholder="Search...">
                        <button class="dbres-searchbtn" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <div class="container position-relative d-flex flex-row  resident-list">
                    <div class="col-9 res-list">
                        <div class="res-account">
                            <div class="d-grid flex-columns res-info">
                                <p class="acc-info">MEDICINE NAME: </p>
                                <p class="acc-info">QUANTITY: </p>
                                <div class="dlt-med d-flex justify-content-end me-1 mb-1">
                                    <button type="button" class="btn btn-danger badge">Delete</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-3 position-relative d-flex justify-content-center add-res-modal">
                        <div class="med_req position-relative d-flex flex-column align-items-center">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn col-12 btn-success fw-bold mt-3 " data-bs-toggle="modal" data-bs-target="#staticBackdropMed"><i class="fas fa-capsules"></i>
                                ADD MEDICINE
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdropMed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">ADD MEDICINE</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <form class="add-resident">
                                              <div class="d-grid flex-rows identification">
                                                  <div class="input-box">
                                                      <div class="details">Medicine Name:</div>
                                                      <input type="text" class="form-controll" placeholder="" required>
                                                  </div>
                                                  <div class="input-box">
                                                      <div class="details">Quantity:</div>
                                                      <input type="text" class="form-controll" placeholder="" required>
                                                  </div>
                                              </div>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Add Medicine</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn col-12 fw-bold btn-success mt-3 " data-bs-toggle="modal" data-bs-target="#staticBackdropMedReq"> <i class="far fa-file-alt"></i>
                                GENERATE REQUEST
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdropMedReq" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">GENERATE REQUEST REPORT</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <form class="form-group">
                                            <h5 class="text-center">MEDICINE REQUEST FORM</h5>
                                            <br>
                                            <div class="request_form">
                                            <p class="mb-1 fw-bold req_name">Requested By: <input type="text" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase" name="" value=""></p>
                                            <p class="mb-1 fw-bold req_name">Date Requested: <input type="date" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase" name="" value=""></p>
                                            <p class="lh-sm fw-bold req_name">Request No.: <input type="text" class="border-top-0 border-end-0 border-start-0 border-dark text-uppercase" name="" value=""></p>
                                            <p class="lh-sm fst-italic text-uppercase fw-bold req_name">Medicine Needed:</p>

                                            <table class="table table-bordered border-dark">
                                              <thead>
                                                <tr>
                                                  <th scope="col">QUANTITY</th>
                                                  <th scope="col">MEDICINE NAME</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>data1</td>
                                                  <td>data2</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"><i <i class="fas fa-print"></i> PRINT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--col 3 end-->

                </div>


            </div>
        </div>


        <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>

<!--
 <button type="button" class="btn-add-req " data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><i class="fas fa-capsules"></i> ADD MEDICINE</button>

<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">ADD MEDICINE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="add-resident">
                    <div class="d-grid flex-rows identification">
                        <div class="input-box">
                            <div class="details">Medicine Name:</div>
                            <input type="text" placeholder="" required>
                        </div>
                        <div class="input-box">
                            <div class="details">Quantity:</div>
                            <input type="text" placeholder="" required>
                        </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success add">Add</button>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn-add-req " data-bs-toggle="modal" data-bs-target="#staticBackdrop2"> GENERATE REQUEST</button>

<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">ADD MEDICINE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="add-resident">
                    <div class="d-grid flex-rows identification">
                        <div class="input-box">
                            <div class="details">Medicine Name:</div>
                            <input type="text" placeholder="" required>
                        </div>
                        <div class="input-box">
                            <div class="details">Quantity:</div>
                            <input type="text" placeholder="" required>
                        </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success add">Add</button>
            </div>
        </div>
    </div>
</div> -->
