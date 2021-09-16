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
                    <div class="res-prof"><a href="dashboard.php"><i class="fas fa-chevron-left"></i></a>EVENT</div>
                    <form class="dbres-search">
                        <input class="dbres-input" placeholder="Search...">
                        <button class="dbres-searchbtn" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <div class="container position-relative d-flex flex-row resident-list">
                    <div class="col-4 even-upcoming-list">
                        <div class=" position-relative db-event">
                            <p class=" up-event">Upcoming Event</p>
                            <div class="justify-content-center d-flex event-list">
                                <div class="event-data">
                                    <p class="event-title">Event Title: </p>
                                    <p class="event-date">Date: </p>
                                    <p class="event-time">Time: </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 position-relative d-flex add-event">
                        <button type="button" class="btn-add-event text-wrap" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><i class="fas fa-calendar-day"></i> Add Event </button>

                        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">ADD EVENT</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="add-resident">
                                            <div class="d-flex flex-wrap identification">
                                                <div class="input-box">
                                                    <div class="details">Event Title:</div>
                                                    <input type="text" placeholder="" required>
                                                </div>
                                                <div class="input-box">
                                                    <div class="details">Date:</div>
                                                    <input type="date" placeholder="" required>
                                                </div>
                                                <div class="input-box">
                                                    <div class="details">Time:</div>
                                                    <input type="time" placeholder="" required>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success">Add Event</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- event modal end -->

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>