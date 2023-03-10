<?php
session_start();
if (!isset($_SESSION['loggedinAdmin']) || $_SESSION['loggedinAdmin'] != true) {
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
    .bi-check {
        fill: green;
        /* replace with desired color */
    }
</style>

<body>

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
                <a href="employeeAdmin.php" class="nav-link text-dark bg-ligh">
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
                <a href="activityAdmin.php" class="nav-link text-dark bg-light">
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
        <?php $id = $_GET['id']; ?>
        <div class="container border border-dark-subtle p-3" style="border-radius: 10px">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                    class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </svg> Its a Weekly Activity Record for EmployeeID: <?php echo $id ?>, Please check and <b>Accept</b> as wel <b>Reject</b> the record.
            </div>
            <?php
            include '../_dbconnect.php';
            $id = $_GET['id'];

            $sql = "SELECT * FROM `activity` where id ='$id'";
            $tableResult = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($tableResult);
            // echo $rowCount;
            $row = mysqli_fetch_assoc($tableResult);



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
                            <td><b>OurActivity </b></td>
                            <td><b>Hours</b></td>
                            <td><b>OurActivity</b></td>
                            <td><b>Hours</b></td>
                            <td><b>OurActivity</b></td>
                            <td><b>Hours</b></td>
                            <td><b>OurActivity</b></td>
                            <td><b>Hours</b></td>
                            <td><b>OurActivity</b></td>
                            <td><b>Hours</b></td>
                        </tr>
                        <form action="" method="post">
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="a1">
                                        <option selected>
                                            <?php echo $row['monday'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t1" id="x"
                                        value="<?php echo $row['mondathours'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a2">
                                        <option selected>
                                            <?php echo $row['tuesday'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t2" id="x"
                                        value="<?php echo $row['tuesdayhourse'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a3">
                                        <option selected>
                                            <?php echo $row['wednesday'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t3" id="x"
                                        value="<?php echo $row['wednesdayhourse'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a4">
                                        <option selected>
                                            <?php echo $row['thursday'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t4" id="x"
                                        value="<?php echo $row['thursdaytourse'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a5">
                                        <option selected>
                                            <?php echo $row['friday'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t5" id="x"
                                        value="<?php echo $row['fridayhourse'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="a6">
                                        <option selected>
                                            <?php echo $row['ma2'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t6" id="x"
                                        value="<?php echo $row['mh2'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a7">
                                        <option selected>
                                            <?php echo $row['ta2'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t7" id="x"
                                        value="<?php echo $row['tah2'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a8">
                                        <option selected>
                                            <?php echo $row['w2'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t8" id="x"
                                        value="<?php echo $row['wh2'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a9">
                                        <option selected>
                                            <?php echo $row['th2'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t9" id="x"
                                        value="<?php echo $row['thh2'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a10">
                                        <option selected>
                                            <?php echo $row['f2'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t10" id="x"
                                        value="<?php echo $row['fh2'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="a11">
                                        <option selected>
                                            <?php echo $row['ma3'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t11" id="x"
                                        value="<?php echo $row['mh3'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a12">
                                        <option selected>
                                            <?php echo $row['ta3'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t12" id="x"
                                        value="<?php echo $row['tah3'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a13">
                                        <option selected>
                                            <?php echo $row['w3'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t13" id="x"
                                        value="<?php echo $row['wh3'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a14">
                                        <option selected>
                                            <?php echo $row['th3'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t14" id="x"
                                        value="<?php echo $row['thh3'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a15">
                                        <option selected>
                                            <?php echo $row['f3'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t15" id="x"
                                        value="<?php echo $row['fh3'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="a16">
                                        <option selected>
                                            <?php echo $row['ma4'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t16" id="x"
                                        value="<?php echo $row['mh4'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a17">
                                        <option selected>
                                            <?php echo $row['ta4'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t17" id="x"
                                        value="<?php echo $row['tah4'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a18">
                                        <option selected>
                                            <?php echo $row['w4'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t18" id="x"
                                        value="<?php echo $row['wh4'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a19">
                                        <option selected>
                                            <?php echo $row['th4'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t19" id="x"
                                        value="<?php echo $row['thh4'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a20">
                                        <option selected>
                                            <?php echo $row['f4'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t20" id="x"
                                        value="<?php echo $row['fh4'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="a21">
                                        <option selected>
                                            <?php echo $row['ma5'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t21" id="x"
                                        value="<?php echo $row['mh5'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a22">
                                        <option selected>
                                            <?php echo $row['ta5'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t22" id="x"
                                        value="<?php echo $row['tah5'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a23">
                                        <option selected>
                                            <?php echo $row['w5'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t23" id="x"
                                        value="<?php echo $row['wh5'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a24">
                                        <option selected>
                                            <?php echo $row['th5'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t24" id="x"
                                        value="<?php echo $row['thh5'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a25">
                                        <option selected>
                                            <?php echo $row['f5'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t25" id="x"
                                        value="<?php echo $row['fh5'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="a26">
                                        <option selected>
                                            <?php echo $row['ma6'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t26" id="x"
                                        value="<?php echo $row['mh6'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a27">
                                        <option selected>
                                            <?php echo $row['ta6'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t27" id="x"
                                        value="<?php echo $row['tah6'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a28">
                                        <option selected>
                                            <?php echo $row['w6'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t28" id="x"
                                        value="<?php echo $row['wh6'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a29">
                                        <option selected>
                                            <?php echo $row['th6'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t29" id="x"
                                        value="<?php echo $row['thh6'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a30">
                                        <option selected>
                                            <?php echo $row['f6'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t30" id="x"
                                        value="<?php echo $row['fh6'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="a31">
                                        <option selected>
                                            <?php echo $row['ma7'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t31" id="x"
                                        value="<?php echo $row['mh7'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a32">
                                        <option selected>
                                            <?php echo $row['ta7'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t32" id="x"
                                        value="<?php echo $row['tah7'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a33">
                                        <option selected>
                                            <?php echo $row['w7'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t33" id="x"
                                        value="<?php echo $row['wh7'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a34">
                                        <option selected>
                                            <?php echo $row['th7'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t34" id="x"
                                        value="<?php echo $row['thh7'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a35">
                                        <option selected>
                                            <?php echo $row['f7'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t35" id="x"
                                        value="<?php echo $row['fh7'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="a36">
                                        <option selected>
                                            <?php echo $row['ma8'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t36" id="x"
                                        value="<?php echo $row['mh8'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a37">
                                        <option selected>
                                            <?php echo $row['ta8'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t37" id="x"
                                        value="<?php echo $row['tah8'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a38">
                                        <option selected>
                                            <?php echo $row['w8'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t38" id="x"
                                        value="<?php echo $row['wh8'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a39">
                                        <option selected>
                                            <?php echo $row['th8'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t39" id="x"
                                        value="<?php echo $row['thh8'] ?>">
                                </td>
                                <td> <select class="form-select" aria-label="Default select example" name="a40">
                                        <option selected>
                                            <?php echo $row['f8'] ?>
                                        </option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                    </select></td>
                                <td>
                                    <input type="time" class="without_ampm form-control" name="t40" id="x"
                                        value="<?php echo $row['fh8'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><b>Total: <br>
                                        <?php
                                        $time1 = date('h:i:s', strtotime($row['mondathours']));
                                        $time2 = date('h:i:s', strtotime($row['mh2']));
                                        $time3 = date('h:i:s', strtotime($row['mh3']));
                                        $time4 = date('h:i:s', strtotime($row['mh4']));
                                        $time5 = date('h:i:s', strtotime($row['mh5']));
                                        $time6 = date('h:i:s', strtotime($row['mh6']));
                                        $time7 = date('h:i:s', strtotime($row['mh7']));
                                        $time8 = date('h:i:s', strtotime($row['mh8']));
                                        $time = [
                                            $time1,
                                            $time2,
                                            $time3,
                                            $time4,
                                            $time5,
                                            $time6,
                                            $time7,
                                            $time8
                                        ];
                                        $sum = strtotime('00:00:00');
                                        $totaltime = 0;
                                        foreach ($time as $element) {
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
                                        $time9 = date('h:i:s', strtotime($row['tuesdayhourse']));
                                        $time10 = date('h:i:s', strtotime($row['tah2']));
                                        $time11 = date('h:i:s', strtotime($row['tah3']));
                                        $time12 = date('h:i:s', strtotime($row['tah4']));
                                        $time13 = date('h:i:s', strtotime($row['tah5']));
                                        $time14 = date('h:i:s', strtotime($row['tah6']));
                                        $time15 = date('h:i:s', strtotime($row['tah7']));
                                        $time16 = date('h:i:s', strtotime($row['tah8']));
                                        $time = [
                                            $time9,
                                            $time10,
                                            $time11,
                                            $time12,
                                            $time13,
                                            $time14,
                                            $time15,
                                            $time16
                                        ];
                                        $sum = strtotime('00:00:00');
                                        $totaltime = 0;
                                        foreach ($time as $element) {
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
                                        $time17 = date('h:i:s', strtotime($row['wednesdayhourse']));
                                        $time18 = date('h:i:s', strtotime($row['wh2']));
                                        $time19 = date('h:i:s', strtotime($row['wh3']));
                                        $time20 = date('h:i:s', strtotime($row['wh4']));
                                        $time21 = date('h:i:s', strtotime($row['wh5']));
                                        $time22 = date('h:i:s', strtotime($row['wh6']));
                                        $time23 = date('h:i:s', strtotime($row['wh7']));
                                        $time24 = date('h:i:s', strtotime($row['wh8']));
                                        $time = [
                                            $time17,
                                            $time18,
                                            $time19,
                                            $time20,
                                            $time21,
                                            $time22,
                                            $time23,
                                            $time24
                                        ];
                                        $sum = strtotime('00:00:00');
                                        $totaltime = 0;
                                        foreach ($time as $element) {
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
                                        $time25 = date('h:i:s', strtotime($row['thursdaytourse']));
                                        $time26 = date('h:i:s', strtotime($row['thh2']));
                                        $time27 = date('h:i:s', strtotime($row['thh3']));
                                        $time28 = date('h:i:s', strtotime($row['thh4']));
                                        $time29 = date('h:i:s', strtotime($row['thh5']));
                                        $time30 = date('h:i:s', strtotime($row['thh6']));
                                        $time31 = date('h:i:s', strtotime($row['thh7']));
                                        $time32 = date('h:i:s', strtotime($row['thh8']));
                                        $time = [
                                            $time25,
                                            $time26,
                                            $time27,
                                            $time28,
                                            $time29,
                                            $time30,
                                            $time31,
                                            $time32
                                        ];
                                        $sum = strtotime('00:00:00');
                                        $totaltime = 0;
                                        foreach ($time as $element) {
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
                                        $time33 = date('h:i:s', strtotime($row['fridayhourse']));
                                        $time34 = date('h:i:s', strtotime($row['fh2']));
                                        $time35 = date('h:i:s', strtotime($row['fh3']));
                                        $time35 = date('h:i:s', strtotime($row['fh4']));
                                        $time36 = date('h:i:s', strtotime($row['fh5']));
                                        $time37 = date('h:i:s', strtotime($row['fh6']));
                                        $time38 = date('h:i:s', strtotime($row['fh7']));
                                        $time39 = date('h:i:s', strtotime($row['fh8']));
                                        $time = [
                                            $time33,
                                            $time34,
                                            $time35,
                                            $time36,
                                            $time37,
                                            $time38,
                                            $time39
                                        ];
                                        $sum = strtotime('00:00:00');
                                        $totaltime = 0;
                                        foreach ($time as $element) {
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
            <br>
            <center>
                <?php 
                $id = $_GET['id'];
            
                ?>
                <div class="row">
                    <div class="col-sm-6">
                    <?php
                    echo '<a class="btn btn-success" href="acceptNotification.php?id=' .$row['id']. '" role="button">Accept</a>'
                    ?>
                    </div>
                    <div class="col-sm-6">
                    <?php
                    echo '<a class="btn btn-danger" href="deletActivityNotification.php?id=' .$row['id']. '" role="button">Reject</a> '
                    ?>
                    </div>
                </div>
            </center>
        </div>

    </div>

</body>

</html>