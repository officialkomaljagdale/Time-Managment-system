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
    <title>Admin Pannal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../afterAdminLogin/assets/css/style.css">
    <link rel="stylesheet" href="../afterAdminLogin/assets/css/stylesForClock.css">
</head>


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
                <a href="adminDashbord.php" class="nav-link text-dark ">
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
                <a href="employeeAdmin.php" class="nav-link text-dark">
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
                <a href="attendanceAdmin.php" class="nav-link text-dark ropdown-toggle  bg-light"
                    data-bs-toggle="dropdown" aria-expanded="false">
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
        <center>
            <div class="container">
                <?php
                include '../_dbconnect.php'; 
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $EMPidInTImeManually = $_POST['EMPidInTImeManually'];
                $manuallyInDateTime = $_POST['manuallyInDateTime'];
                include '../_dbconnect.php';

                $insertData = "INSERT INTO `empintime` (`empidforattendance`, `manuallyout`) VALUES ('$EMPidInTImeManually', '$manuallyInDateTime')";
                $result = mysqli_query($conn, $insertData);
                // $tz = 'Asia/Kolkata';   
                // date_default_timezone_set($tz);

                if ($result) {
                    echo '<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    <strong>Success!</strong> Employee In time  Added Successfully
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
                <div class="clock">
                    <div class="hand hour" data-hour-hand></div>
                    <div class="hand minute" data-minute-hand></div>
                    <div class="hand second" data-second-hand></div>
                    <div class="number number1">1</div>
                    <div class="number number2">2</div>
                    <div class="number number3">3</div>
                    <div class="number number4">4</div>
                    <div class="number number5">5</div>
                    <div class="number number6">6</div>
                    <div class="number number7">7</div>
                    <div class="number number8">8</div>
                    <div class="number number9">9</div>
                    <div class="number number10">10</div>
                    <div class="number number11">11</div>
                    <div class="number number12">12</div>
                </div>
                <br>
                <form action="manuallyInTimeAttendance.php" method="post">
                    <div class="row">
                        <center>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="EMPidInTImeManually" placeholder="Enter Employee ID"
                                    aria-label="First name" required>
                            </div>
                            <div class="col-md-4">
                                <input type="datetime-local" class="form-control mt-3" name="manuallyInDateTime" placeholder="Enter In Time"
                                    aria-label="First name" required>
                            </div>
                            
                        </center>
                        <div class="col">
                        </div>
                    </div>
                    <div class="buttonsInAttendance ms-9">
                        <button type="submit" class="btn btn-outline-dark mt-3">Add Manually In Time</button>
                    </div>
                </form>
            </div>
        </center>

    </div>
    <!-- End demo content -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <script src="../afterAdminLogin/assets/js/script.js"></script>
    <script src="../afterAdminLogin/assets/js/stylesForClock.js"></script>
</body>

</html>