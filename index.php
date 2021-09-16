<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome/css/all.css">
    <link href="mystyle_CSS.css" rel="stylesheet">
    <link rel="icon" href="images\macawayan logo.png">


    <title>Login</title>

</head>

<body>
    <section class="Login_Section">
        <div class="container log_content">
            <div class="row">

                <div class="hms-display col-md-6 d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center" id="overlay">
                        <h3 style="text-align:center">Barangay Macawayan Health Management System</h3>
                    </div>
                </div>

                <div class="hms-login col-md-6 d-flex align-items-center">
                    <div class="login_form p-2 d-flex justify-content-center">
                        <form class="form-login" action="#">
                            <img class="login-user-logo d-flex align-items-start" src="images\macawayan logo.png" alt="Login" width="150" height="150">
                            <div class="input-group">
                                <i class="fa fa-user icon"></i>
                                <input type="text" class="form-control" placeholder="Username" name="hms-username">
                            </div>
                            <div class="input-group">
                                <i class="fa fa-lock icon"></i>
                                <input type="password" class="form-control" placeholder="Password" name="hms-pass">
                            </div>
                            <span class="forgotpass"><a href="#">Forgot Password?</a></span>
                            <button type="submit" class="btn">LOGIN</button>
                            <p>Not a Member? <span><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register here</a></span></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="#">
            <div class="content">
                <h5 class="text-center">Create Account</h5>
                <hr>

                <!--Personal Information-->
                <form class="form-horizontal" action="#" required>
                    <p class="info-head text-center fw-bold">Personal Information</p>
                    <div class="form-group d-flex ">
                        <div class="in-col col-sm-5 d-flex justify-content-start">
                            <label class="control-label col-sm-4 d-flex align-items-center" for="user-type">User Type:</label>
                            <select id="user-type" name="user-type">
                                <option selected>Choose...</option>
                                <option value="1">Nurse</option>
                                <option value="2">BHW</option>
                            </select>
                        </div>

                        <div class="in-col col-end col-sm-6 d-flex justify-content-end">
                            <label class="control-label col-sm-4  d-flex align-items-center" for="user-id">User ID:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="user-id">
                            </div>
                        </div>

                    </div>
                    <div class="form-group d-flex">
                        <label class="control-label col-sm-3 d-flex align-items-center" for="fname">First Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="fname">
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label class="control-label col-sm-3 d-flex align-items-center" for="mname">Middle Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="mname">
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label class="control-label col-sm-3 d-flex align-items-center" for="lname">Last Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="lname">
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label class="control-label col-sm-3 d-flex align-items-center" for="address">Address:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="address">
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="in-col col-sm-6 d-flex">
                            <label class="control-label col-sm-4 d-flex align-items-center" for="bdate">Birthdate:</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="bdate">
                            </div>
                        </div>
                        <div class="in-col col-sm-6 d-flex">
                            <label class="control-label col-sm-4 d-flex align-items-center" for="age">Age:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="age">
                            </div>
                        </div>

                    </div>

                    <hr>
                    <!--Account Information-->
                    <p class="info-head text-center fw-bold">Account Information</p>
                    <div class="form-group d-flex">
                        <label class="control-label col-sm-4 d-flex align-items-center" for="username">Username:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="username">
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label class="control-label col-sm-4 d-flex align-items-center" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label class="control-label col-sm-4 d-flex align-items-center" for="pwd">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="pwd">
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label class="control-label col-sm-4 d-flex align-items-center" for="conpwd">Confirm Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="conpwd">
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-center">
                        <div class="col-sm-offset-2 col-sm-10 d-flex justify-content-center">
                            <button type="submit" class="btn-reg">Submit</button>
                        </div>
                    </div>
                </form>

            </div>




            <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>