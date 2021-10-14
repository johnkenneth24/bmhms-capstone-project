<!DOCTYPE html>
<html>

<head>
  <title>BMHMS - Reports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/font-awesome/css/all.css">
  <link rel="stylesheet" rel="text/css" href="dashboard_style.css">
  <link rel="stylesheet" href="purok.css?v=<?php echo time(); ?>">
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
          <a href="purok.php"><i class="fas fa-map-marker-alt"></i>Purok</a>
          <a href="fam_numbering.php"><i class="fas fa-child"></i>Family Numbering</a>
          <a href="med_request.php"><i class="fas fa-capsules"></i>Medicine Request</a>
          <a class="active" href="reports.php"><i class="fas fa-file-alt"></i>Reports</a>
          <a href="manage_account.php"><i class="fas fa-address-card"></i>Manage Account</a>
        </div>
        <div class="position-relative d-grid flex-column log-out">
          <a href="index.php" class="log-out"><i class="fas fa-sign-out-alt"></i>Log Out</a>
        </div>
      </div>

      <div class="col-md-9 content">
        <div class="d-flex flex-columns gap-1 mt-4 reports-menu">
          <!-- Button trigger modal -->
          <button type="button" class=" col-md-6 btn-success  btn-monthly-report" data-bs-toggle="modal" data-bs-target="#staticBackdropMAR">
           MONTHLY ACCOMPLISHED REPORTS
          </button>


          <!-- Modal -->
          <div class="modal fade" id="staticBackdropMAR" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width : 80%;" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">MONTHLY ACCOMPLISHED REPORT</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                 <form id="MARprintThis" class="form-group-mar">
                 <div class="d-flex justify-content-center flex-column mar-report">
                     <p class="text-center">Republic of the Philippines</p>
                     <p class="text-center">Province of Sorsogon</p>
                     <p class="text-center">Municipality of Irosin</p>
                     <p class="text-center fw-bold">MUNICIPALITY HEALTH OFFICE</p>
                     <p class="text-center fw-bold">MONTHLY ACCOMPLISHED REPORT OF BARANGAY HEALTH WORKERS</p>
                   <center>
                     <form class="purok-month">
                     <p class="text-left fw-bold">Barangay                                          : Macawayan</p>
                     <p class="text-left fw-bold">Purok                                             :</p>
                     <p class="text-left fw-bold">Month Of                                          : </p>
                   </form>

                   <table style="width:100%" class="table table-bordered border-dark">
                    <thead>
                      <tr>
                        <th colspan="7">MATERNAL AND CHILD HEALTH</th>
                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        <th style="width:9%">PREGNANT</th>
                        <th style="width:20%">NAME</th>
                        <th style="width:10%">AGE</th>
                        <th style="width:10" colspan="2">IKA-PIRA NA BATA</th>
                        <th  colspan="2">LMP</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th scope="row">1</td>
                        <td>data1</td>
                        <td>data2</td>
                        <td colspan="2">data3</2td>
                        <td colspan="2">data4</td>
                      </tr>
                    </tbody>

                    <thead>
                      <tr>
                        <th>DELIVERIES</th>
                        <th>NAME</th>
                        <th>AGE</th>
                        <th style="width:15%">DATE DELIVERED</th>
                        <th style="width:10%">OUTCOME</th>
                        <th>PLACE</th>
                        <th style="width:10%">TIME</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th scope="row">1</td>
                        <td>data1</td>
                        <td>data2</td>
                        <td>data3</td>
                        <td>data4</td>
                        <td>data5</td>
                        <td>data6</td>
                      </tr>
                    </tbody>

                    <thead>
                      <tr>
                        <th>EPI</th>
                        <th>NAME</th>
                        <th>BIRTHDATE</th>
                        <th colspan="2">MEDS. GIVEN</th>
                        <th colspan="2">DATE</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th scope="row">1</td>
                        <td>data1</td>
                        <td>data1</td>
                        <td colspan="2">data1</td>
                        <td colspan="2">data1</td>
                      </tr>
                    </tbody>

                    <thead>
                      <tr>
                        <th>NTP</th>
                        <th colspan="6">NAME</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th scope="row">1</td>
                        <td colspan="6">data1</td>
                      </tr>
                    </tbody>

                    <thead>
                      <tr>
                        <th colspan="2">FAMILY PLANNING</th>
                        <th colspan="2">NAME</th>
                        <th colspan="2">METHOD USE</th>
                        <th>AGE</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th colspan="2" scope="row">1</td>
                        <td colspan="2">data1</td>
                        <td  colspan="2">data1</td>
                        <td>data1</td>
                      </tr>
                    </tbody>

                    <thead>
                      <tr>
                        <th colspan="3">CONTROL OF DIARRHEAL DISEASES</th>
                        <th  colspan="4">NAME</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th scope="row" colspan="2">1</td>
                        <td colspan="6">data1</td>
                      </tr>
                    </tbody>

                    <thead>
                      <tr>
                        <th colspan="7" >OTHER SERVICES RENDERED</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td colspan="7">1</td>
                      </tr>
                    </tbody>


                  </table>
                 </center>

                 <div class="signature-by">

                   <div class="d-flex flex-grid bhw-signature">
                   <div class="submitted-by">
                     <p class="submitted-worker">Submitted by:</p>
                     <input type="text" class="sub-name" name="" value="">
                     <p class="fw-bold worker-type">Barangay Health Worker</p>
                   </div>
                  </div>

                   <div class="d-flex flex-grid noted-by">
                     <div class="noted-sign">
                     <p class="submitted-worker">Noted by:</p>
                     <input type="text" class="sub-name" name="" value="">
                     <p class="fw-bold worker-type">DOH NDP Nurse - II</p>
                   </div>

                   <div class="noted-sign">
                     <p class="submitted-worker">Noted by:</p>
                     <input type="text" class="sub-name" name="" value="">
                     <p class="fw-bold worker-type">Barangay Captain</p>
                   </div>
                   </div>

                 </div>

               </div>
               </form>

               </div>
               <div class="modal-footer">
                 <button id="MARbtnPrint" type="button" class="btn btn-primary"><i class="fas fa-print"></i> PRINT</button>
               </div>
             </div>
           </div>
          </div>


          <button type="button" class=" col-md-6 btn-success  btn-monthly-report" data-bs-toggle="modal" data-bs-target="#staticBackdropMVR">
           MONTHLY VISITORS REPORTS
          </button>


          <!-- Modal -->
          <div class="modal fade" id="staticBackdropMVR" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">MONTHLY VISITORS REPORT</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="MVRprintThis" class="form-group-mar">
                  <div class="d-flex justify-content-center flex-column mar-report">
                      <p class="text-center">Republic of the Philippines</p>
                      <p class="text-center">Province of Sorsogon</p>
                      <p class="text-center">Municipality of Irosin</p>
                      <p class="text-center fw-bold">MUNICIPALITY HEALTH OFFICE</p>
                      <p class="text-center fw-bold">MONTHLY VISITORS REPORT</p>
                    <center>
                      <form class="purok-month">
                      <p class="text-left fw-bold">Barangay: Macawayan</p>
                      <p class="text-left fw-bold">Purok:</p>
                      <p class="text-left fw-bold">Month Of: </p>
                    </form>

                    <table style="width:100%" class="table table-bordered border-dark">

                     <thead>
                       <tr>
                         <th style="width:10%">DATE</th>
                         <th style="width:90%">NAME</th>
                       </tr>
                     </thead>

                     <tbody>
                       <tr>
                         <th scope="row">1</td>
                         <td>data1</td>
                       </tr>
                     </tbody>


                   </table>
                  </center>

                  <div class="signature-by">

                    <div class="d-flex flex-grid bhw-signature">
                    <div class="submitted-by">
                      <p class="submitted-worker">Submitted by:</p>
                      <input type="text" class="sub-name" name="" value="">
                      <p class="fw-bold worker-type">Barangay Health Worker</p>
                    </div>
                   </div>

                    <div class="d-flex flex-grid noted-by">
                      <div class="noted-sign">
                      <p class="submitted-worker">Noted by:</p>
                      <input type="text" class="sub-name" name="" value="">
                      <p class="fw-bold worker-type">DOH NDP Nurse - II</p>
                    </div>

                    <div class="noted-sign">
                      <p class="submitted-worker">Noted by:</p>
                      <input type="text" class="sub-name" name="" value="">
                      <p class="fw-bold worker-type">Barangay Captain</p>
                    </div>
                    </div>

                  </div>

                </div>
                </form>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button id="MVRbtnPrint" type="button" class="btn btn-primary"><i class="fas fa-print"></i> PRINT</button>
                </div>
              </div>
            </div>
          </div>

        </div>

        <hr>


      </div>
    </div>
  </div>

  <script src="MARprint.js"></script>
  <script src="MVRprint.js"></script>
  <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>
