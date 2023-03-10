<?php
session_start();
if(!isset($_SESSION['loggedinAdmin']) || $_SESSION['loggedinAdmin']!= true){
  header("Location: ../index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Pannal | Employees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../afterAdminLogin/assets/css/style.css">
</head>
<style>
.without_ampm::-webkit-datetime-edit-ampm-field {
    display: none;
}

input[type=time]::-webkit-clear-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    -o-appearance: none;
    -ms-appearance: none;
    appearance: none;
    margin: -10px;
}
</style>

<body>

    <!-- Vertical navbar -->
    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center">


                <div class="media-body">
                    <center> <img loading="lazy" src="../assets/images/ASDR LOGO.png" alt="..." width="70px"
                            height="5px" class="mr-3 img-thumbnail shadow-sm "> </center>

                    <!-- <h4 class="m-0">ASDR Infotech</h4> -->
                    <p class="font-weight-normal text-muted mb-0">Welcome
                    <?php echo $_SESSION['loginAdminName'] ?>
                    </p>
                </div>
            </div>
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="adminDashbord.php" class="nav-link text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-border-all" viewBox="0 0 16 16">
                        <path
                            d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z" />
                    </svg>
                    <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="employeeAdmin.php" class="nav-link text-dark bg-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path
                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                    </svg>
                    <!-- <i class="fa fa-users mr-3 text-primary fa-fw"></i> -->
                    Employees
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="attendanceAdmin.php" class="nav-link text-dark ropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-check" viewBox="0 0 16 16">
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                        <path
                            d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                    </svg>
                    <!-- <i class="fa fa-file mr-3 text-primary fa-fw"></i> -->
                    Attendance
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="attendanceAdmin.php">In Time</a></li>
                    <li><a class="dropdown-item" href="attendanceOutTimeAdmin.php">Out Time</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="leaveAdmin.php" class="nav-link text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8Zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5Z" />
                    </svg>
                    <!-- <i class="fa fa-letter mr-3 text-primary fa-fw"></i> -->
                    Leaves
                </a>
            </li>

            <li class="nav-item">
                <a href="reportsAdmin.php" class="nav-link text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-files" viewBox="0 0 16 16">
                        <path
                            d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
                    </svg>
                    <!-- <i class="fa fa-file mr-3 text-primary fa-fw"></i> -->
                    Reports
                </a>
            </li>

            <li class="nav-item">
                <a href="activityAdmin.php" class="nav-link text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-activity" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
                    </svg>
                    <!-- <i class="fa fa-users mr-3 text-primary fa-fw"></i> -->
                    Activity
                </a>
            </li>
        </ul>

        <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Other</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="#" class="nav-link text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-gear" viewBox="0 0 16 16">
                        <path
                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                        <path
                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                    </svg>
                    <!-- <i class="bi bi-gear mr-3 text-primary fa-fw"></i> -->
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <a href="../_logout.php" class="nav-link text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                        <path fill-rule="evenodd"
                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg>
                    <!-- <i class="bi bi-1-circle mr-3 text-primary fa-fw"></i> -->
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End vertical navbar -->


    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i
                class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

        <!-- Demo content -->

        <!-- Modal -->

        <div class="container">
            <center>
                <section class="vh-50">
                    <div class="mb-5 h-50">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-md-9 col-lg-7 col-xl-7">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-body p-4">
                                        <div class="d-flex text-black">
                                            <div class="flex-shrink-0">
                                                <img src="../afterAdminLogin/assets/images/unknownUser.jpg"
                                                    alt="Generic placeholder image" class="img-fluid"
                                                    style="width: 180px; border-radius: 10px;">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <?php
                                                $fatchempname = $_GET['empname'];
                                                $position = $_GET['position'];
                                                $fatchempid = $_GET['empid'];
                                                ?>
                                                <h5 class="mb-1"><?php echo $fatchempname ?></h5>
                                                <p class="mb-2 pb-1" style="color: #2b2a2a;"><?php echo $position ?></p>
                                                <p class="mb-2 pb-1" style="color: #2b2a2a;"><?php echo $fatchempid ?></p>
                                                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                                    style="background-color: #efefef;">
                                                    <div>
                                                        <p class="small text-muted mb-1">Total Working Time</p>
                                                        <p class="mb-0">60 hrs</p>
                                                    </div>
                                                    <div class="px-3">
                                                        <p class="small text-muted mb-1">Consumed Hours</p>
                                                        <p class="mb-0">976</p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </center>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Activity Code 01:
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Tranning.</strong> Activity code 01 is presents that in perticular hrs what tranning
                            will be there
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Activity Code 02:
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Error Debugging.</strong> Activity code 02 is presents that in perticular hrs you
                            are wroking on Error solving
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Activity Code 03:
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Backend.</strong> Activity code 03 is presents that in perticular hrs You are
                            working on backend part
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            Activity Code 04:
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Frontend.</strong> Activity code 03 is presents that in perticular hrs You are
                            working on frontend part
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <?php
            include '../_dbconnect.php';
            $sql = "SELECT * FROM `activity`";
            $tableResult = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($tableResult);
            $row = mysqli_fetch_row($tableResult);
            $row2 = mysqli_fetch_row($tableResult);
            $row3 = mysqli_fetch_row($tableResult);
            $row4 = mysqli_fetch_row($tableResult);
            ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2">Monday <br> 20/02/2023</th>
                            <th class="text-center" colspan="2">Tuesday <br> 21/02/2023</th>
                            <th class="text-center" colspan="2">Wednesday <br> 22/02/2023</th>
                            <th class="text-center" colspan="2">Thursday <br> 23/02/2023</th>
                            <th class="text-center" colspan="2">Friday <br> 24/02/2023</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b> Activity </b></td>
                            <td><b>Hours</b></td>
                            <td><b>Activity</b></td>
                            <td><b>Hours</b></td>
                            <td><b>Activity</b></td>
                            <td><b>Hours</b></td>
                            <td><b>Activity</b></td>
                            <td><b>Hours</b></td>
                            <td><b>Activity</b></td>
                            <td><b>Hours</b></td>
                        </tr>
                        <form action="activityAdmin2.php#alert" method="post">
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="am1">
                                        <option selected><?php echo $row[1] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t1" id="x"
                                        value="<?php echo $row[6] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am2">
                                        <option selected><?php echo $row[2] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t2" id="x"
                                        value="<?php echo $row[7] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am3">
                                        <option selected><?php echo $row[3] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t3" id="x"
                                        value="<?php echo $row[8] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am4">
                                        <option selected><?php echo $row[4] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t4" id="x"
                                        value="<?php echo $row[9] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am5">
                                        <option selected><?php echo $row[5] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t5" id="x"
                                        value="<?php echo $row[10] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="am6">
                                        <option selected><?php echo $row2[1] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t6" id="x"
                                        value="<?php echo $row2[6] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am7">
                                        <option selected><?php echo $row2[2] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t7" id="x"
                                        value="<?php echo $row2[7] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am8">
                                        <option selected><?php echo $row2[3] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t8" id="x"
                                        value="<?php echo $row2[8] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am9">
                                        <option selected><?php echo $row2[4] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t9" id="x"
                                        value="<?php echo $row2[9] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am10">
                                        <option selected><?php echo $row2[5] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t10" id="x"
                                        value="<?php echo $row2[10] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="am11">
                                        <option selected><?php echo $row3[1] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t11" id="x"
                                        value="<?php echo $row3[6] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am12">
                                        <option selected><?php echo $row3[2] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t12" id="x"
                                        value="<?php echo $row3[7] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am13">
                                        <option selected><?php echo $row3[3] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t13" id="x"
                                        value="<?php echo $row3[8] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am14">
                                        <option selected><?php echo $row3[4] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t14" id="x"
                                        value="<?php echo $row3[9] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="am15">
                                        <option selected><?php echo $row3[5] ?></option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t15" id="x"
                                        value="<?php echo $row3[10] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><b>Total: <br> <?php 
                                                        $time1 = date('h:i:s', strtotime($row[6]));
                                                        $time2 = date('h:i:s', strtotime($row2[6]));
                                                        $time3 = date('h:i:s', strtotime($row3[6]));
                                                        $time = [
                                                            $time1, $time2, $time3
                                                        ];
                                                        $sum = strtotime('00:00:00');
                                                        $totaltime = 0;
                                                        foreach( $time as $element ) {
                                                            $timeinsec = strtotime($element) - $sum;
                                                            $totaltime = $totaltime + $timeinsec;
                                                        }
                                                        $h = intval($totaltime / 3600);
                                                        $totaltime = $totaltime - ($h * 3600);
                                                        $m = intval($totaltime / 60);
                                                        $s = $totaltime - ($m * 60);
                                                        echo ("$h:$m:$s");
                                                    ?></b></td>
                                <td></td>
                                <td><b>Total: <br>
                                                    <?php 
                                                        $time4 = date('h:i:s', strtotime($row[7]));
                                                        $time5 = date('h:i:s', strtotime($row2[7]));
                                                        $time6 = date('h:i:s', strtotime($row3[7]));
                                                        $time = [
                                                            $time4, $time5, $time6
                                                        ];
                                                        $sum = strtotime('00:00:00');
                                                        $totaltime = 0;
                                                        foreach( $time as $element ) {
                                                            $timeinsec = strtotime($element) - $sum;
                                                            $totaltime = $totaltime + $timeinsec;
                                                        }
                                                        $h = intval($totaltime / 3600);
                                                        $totaltime = $totaltime - ($h * 3600);
                                                        $m = intval($totaltime / 60);
                                                        $s = $totaltime - ($m * 60);
                                                        echo ("$h:$m:$s");
                                                    ?>
                                </b></td>
                                <td></td>
                                <td><b>Total: <br>
                                                    <?php 
                                                        $time7 = date('h:i:s', strtotime($row[8]));
                                                        $time8 = date('h:i:s', strtotime($row2[8]));
                                                        $time9 = date('h:i:s', strtotime($row3[8]));
                                                        $time = [
                                                            $time7, $time8, $time9
                                                        ];
                                                        $sum = strtotime('00:00:00');
                                                        $totaltime = 0;
                                                        foreach( $time as $element ) {
                                                            $timeinsec = strtotime($element) - $sum;
                                                            $totaltime = $totaltime + $timeinsec;
                                                        }
                                                        $h = intval($totaltime / 3600);
                                                        $totaltime = $totaltime - ($h * 3600);
                                                        $m = intval($totaltime / 60);
                                                        $s = $totaltime - ($m * 60);
                                                        echo ("$h:$m:$s");
                                                    ?>
                                </b></td>
                                <td></td>
                                <td><b>Total: <br>
                                                    <?php 
                                                        $time10 = date('h:i:s', strtotime($row[9]));
                                                        $time11 = date('h:i:s', strtotime($row2[9]));
                                                        $time12 = date('h:i:s', strtotime($row3[9]));
                                                        $time = [
                                                            $time10, $time11, $time12
                                                        ];
                                                        $sum = strtotime('00:00:00');
                                                        $totaltime = 0;
                                                        foreach( $time as $element ) {
                                                            $timeinsec = strtotime($element) - $sum;
                                                            $totaltime = $totaltime + $timeinsec;
                                                        }
                                                        $h = intval($totaltime / 3600);
                                                        $totaltime = $totaltime - ($h * 3600);
                                                        $m = intval($totaltime / 60);
                                                        $s = $totaltime - ($m * 60);
                                                        echo ("$h:$m:$s");
                                                    ?>
                                </b></td>
                                <td></td>
                                <td><b>Total: <br>
                                                    <?php 
                                                        $time13 = date('h:i:s', strtotime($row[10]));
                                                        $time14 = date('h:i:s', strtotime($row2[10]));
                                                        $time15 = date('h:i:s', strtotime($row3[10]));
                                                        $time = [
                                                            $time13, $time14, $time15
                                                        ];
                                                        $sum = strtotime('00:00:00');
                                                        $totaltime = 0;
                                                        foreach( $time as $element ) {
                                                            $timeinsec = strtotime($element) - $sum;
                                                            $totaltime = $totaltime + $timeinsec;
                                                        }
                                                        $h = intval($totaltime / 3600);
                                                        $totaltime = $totaltime - ($h * 3600);
                                                        $m = intval($totaltime / 60);
                                                        $s = $totaltime - ($m * 60);
                                                        echo ("$h:$m:$s");
                                                    ?>
                                </b></td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <center><button type="submit  me-2" class="btn btn-outline-dark mb-3">Save Activity</button></center>
            </form>


            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $am1 = $_POST['am1'];
                $am2 = $_POST['am2'];
                $am3 = $_POST['am3'];
                $am4 = $_POST['am4'];
                $am5 = $_POST['am5'];
                $am6 = $_POST['am6'];
                $am7 = $_POST['am7'];
                $am8 = $_POST['am8'];
                $am9 = $_POST['am9'];
                $am10 = $_POST['am10'];
                $am11 = $_POST['am11'];
                $am12 = $_POST['am12'];
                $am13 = $_POST['am13'];
                $am14 = $_POST['am14'];
                $am15 = $_POST['am15'];
                $t1 = $_POST['t1'];
                $t2 = $_POST['t2'];
                $t3 = $_POST['t3'];
                $t4 = $_POST['t4'];
                $t5 = $_POST['t5'];
                $t6 = $_POST['t6'];
                $t7 = $_POST['t7'];
                $t8 = $_POST['t8'];
                $t9 = $_POST['t9'];
                $t10 = $_POST['t10'];
                $t11 = $_POST['t11'];
                $t12 = $_POST['t12'];
                $t13 = $_POST['t13'];
                $t14 = $_POST['t14'];
                $t15 = $_POST['t15'];

                include '../_dbconnect.php';

                $insertData1 = "UPDATE activity SET monday = $am1, tuesday = $am2, wednesday = $am3, thursday = $am4, friday= $am5, mhourse = '$t1', tuehourse = '$t2', whourse = '$t3', thuhourse = '$t4', fhourse= '$t5', status = 0 WHERE id = 22";
                $result1 = mysqli_query($conn, $insertData1);

                $insertData2 = "UPDATE activity SET monday = $am6, tuesday = $am7, wednesday = $am8, thursday = $am9, friday= $am10, mhourse = '$t6', tuehourse = '$t7', whourse = '$t8', thuhourse = '$t9', fhourse= '$t10', status = 0 WHERE id = 123";
                $result2 = mysqli_query($conn, $insertData2);

                $insertData3 = "UPDATE activity SET monday = $am11, tuesday = $am12, wednesday = $am13, thursday = $am14, friday= $am15, mhourse = '$t11', tuehourse = '$t12', whourse = '$t13', thuhourse = '$t14', fhourse= '$t15', status = 0 WHERE id = 9530";
                $result3 = mysqli_query($conn, $insertData3);


                if ($result1 && $result2 && $result3) {
                    echo '<div class="alert alert-success alert-dismissible fade show mt-5" id="alert" role="alert">
                    <strong>Success!</strong>Activity Saved Successfully. Click here to <a href="activityAdmin2.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
                    <path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 1 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
                    <path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
                  </svg></a> page.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                } else {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Something went wrong.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }
            }
            ?>
            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link text-secondary-emphasis" href="#">Previous Week</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next Week</a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
    <br><br>

    </div>
    <!-- End demo content -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <script src="../afterAdminLogin/assets/js/script.js"></script>
</body>

</html>