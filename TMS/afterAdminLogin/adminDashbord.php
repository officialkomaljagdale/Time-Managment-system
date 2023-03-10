<?php
session_start();
if (!isset($_SESSION['loggedinAdmin']) || $_SESSION['loggedinAdmin'] != true) {
  header("Location: ../index.php");
  exit;
}
?>
<?php
include '../_dbconnect.php';
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
  <!-- barchart -->

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        var data = google.visualization.arrayToDataTable([
          ['Employees', 'Shubham', 'Bhagyshri', 'Aarti', 'Harshal', 'Naresh', 'Average'],
          ['2022/11', 165, 938, 522, 998, 450, 614.6],
          ['2022/12', 135, 1120, 599, 1268, 288, 682],
          ['2023/01', 157, 1167, 587, 807, 397, 623],
          ['2023/02', 139, 1110, 615, 968, 215, 609.4],
          ['2023/03', 136, 691, 629, 1026, 366, 569.6]
        ]);

        var options = {
          title: 'Monthly Working Hours',
          vAxis: {
            title: 'Working-Hours'
          },
          hAxis: {
            title: 'Month'
          },
          seriesType: 'bars',
          series: {
            5: {
              type: 'line'
            }
          },
          colors: ['#717ff6', '#ecd694', '#527ca9', '#b4bdd4', '#84945c', '#07b5c7']
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load("current", {
        packages: ["corechart"]
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Completed', 11],
          ['In-progress', 2],
          ['Behind', 2]
        ]);

        var options = {
          title: 'Project Status',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <script>
      google.charts.load('current', {
        'packages': ['bar']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'TMS', 'LMS', 'OfficialSite'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          bars: 'horizontal',
          vAxis: {
            format: 'decimal'
          },
          height: 300,
          colors: ['#1b9e77', '#d95f02', '#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

  </head>

  <style>
  </style>

<body>

  <!-- Vertical navbar -->
  <div class="vertical-nav" id="sidebar" style="background-color: #6c757d;">
    <div class="py-4 px-3 mb-4" style="background-color: #6c757d;">
      <div class="media d-flex align-items-center ">
        <div class="media-body">
          <center> <img loading="lazy" src="../assets/images/ASDR LOGO.png" alt="..." width="70px" height="5px"
              class="mr-3 img-thumbnail shadow-sm "> </center>

          <!-- <h4 class="m-0">ASDR Infotech</h4> -->
          <p class="font-weight-normal text-light mb-0">Welcome
            <?php echo $_SESSION['loginAdminName'] ?>
            <!-- <?php echo $_SESSION['empAdminId'] ?> -->
          </p>
        </div>
      </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

    <ul class="nav flex-column mb-0" style="background-color: #6c757d;">
      <li class="nav-item active">
        <a href="adminDashbord.php" id="xxx" class="nav-link text-dark ">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-border-all"
            viewBox="0 0 16 16">
            <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z" />
          </svg>
          <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a href="employeeAdmin.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill"
            viewBox="0 0 16 16">
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
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check"
            viewBox="0 0 16 16">
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
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files"
            viewBox="0 0 16 16">
            <path
              d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
          </svg>
          <!-- <i class="fa fa-file mr-3 text-primary fa-fw"></i> -->
          Reports
        </a>
      </li>

      <li class="nav-item">
        <a href="activityAdmin.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
          </svg>
          <!-- <i class="fa fa-users mr-3 text-primary fa-fw"></i> -->
          Activity
        </a>
      </li>

      <li class="nav-item">
        <a href="forecastAdmin.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-currency-rupee" viewBox="0 0 16 16">
            <path
              d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
          </svg>
          <!-- <i class="fa fa-users mr-3 text-primary fa-fw"></i> -->
          Forecast
        </a>
      </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Other</p>

    <ul class="nav flex-column mb-0" style="background-color: #6c757d;">

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

    <div class="row row-cols-2 row-cols-md-4 g-3 mb-5">
      <div class="col">
        <div class="card h-100">
          <div class="card-body text-muted" style="background-color: rgb(232, 232, 232);">
            <center>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-people-fill" viewBox="0 0 16 16">
                <path
                  d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
              </svg>
              <?php
              $sqlQuery = "SELECT * FROM 	employees where usertype = 'employee'";
              $query = mysqli_query($conn, $sqlQuery);
              $noOfRows = mysqli_num_rows($query);
              ?>
              <h4 class="mt-2">
                <?php echo "$noOfRows"; ?>
              </h4>
              <h6 class="card-title mt-2">Total Employees</h6>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body text-muted" style="background-color: rgb(232, 232, 232);">
            <center>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-people-fill" viewBox="0 0 16 16">
                <path
                  d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
              </svg>
              <?php
              $sqlQuery2 = "SELECT * FROM 	employees where emptype = 'intern'";
              $query2 = mysqli_query($conn, $sqlQuery2);
              $noOfRows2 = mysqli_num_rows($query2);
              ?>
              <h4 class="mt-2">
                <?php echo "$noOfRows2"; ?>
              </h4>
              <h6 class="card-title mt-2">Total Interns</h6>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body text-muted" style="background-color: rgb(232, 232, 232);">
            <center>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-briefcase"
                viewBox="0 0 16 16">
                <path
                  d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
              </svg>
              <h4 class="mt-2">3</h4>
              <h6 class="card-title mt-2">Total Projects</h6>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body text-muted" style="background-color: rgb(232, 232, 232);">
            <center>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar"
                viewBox="0 0 16 16">
                <path
                  d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
              </svg>
              <h4 class="mt-2">0</h4>
              <h6 class="card-title mt-2">Today's Leaves</h6>
            </center>
          </div>
        </div>
      </div>
    </div>


    <!-- Demo content -->
    <div class="row row-cols-1 row-cols-md-2 g-2">
      <div class="col">
        <div class="card h-100 border-0">
          <div class="card-body shadow">
            <div id="donutchart" style="width: 400px; height: 300px; padding: 0; margin: 0;"></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-0">
          <div class="card-body shadow" style="overflow: auto; height: 350px;">
            <h5 class="text-muted mt-3 mb-3">RECENT ACTIVITIES</h5>
            <table class="table">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SrNo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Time</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Project</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Shubham Shinde</td>
                    <td>08 Jan 2023</td>
                    <td>Completed "Design new idea"</td>
                    <td>Time Managment System</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bhagyshri Shingare</td>
                    <td>09 Jan 2023</td>
                    <td>Completed "Completed Contact Form"</td>
                    <td>Time Managment System</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Aarti K </td>
                    <td>10 Jan 2023</td>
                    <td>Working on "Designing Part"</td>
                    <td>XProject</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Naresh</td>
                    <td>11 Jan 2018</td>
                    <td>Start working on "Dashbord"</td>
                    <td>LMS</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Harshal K</td>
                    <td>12 Jan 2018</td>
                    <td>Start working on "Dashbord"</td>
                    <td>LMS</td>
                  </tr>
                </tbody>
              </table>
            </table>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="text-muted mt-3 mb-3">ENGAGEMENT OVERVIEW</h5>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Duration (hrs) </th>
                  <th scope="col">Project</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>20 hrs</td>
                  <td>Time Managment System</td>
                </tr>
                <tr>
                  <td>5 hrs</td>
                  <td>LMS</td>
                </tr>
                <tr>
                  <td>51 hrs</td>
                  <td>xProject</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col" style="overflow: auto; height: 400px;">
        <div class="card">
          <div class="card-body">
            <h5 class="text-muted mt-3 mb-3">VIEWS PER MINUTE</h5>
            <div id="chart_div"></div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Sr No</th>
                  <th scope="col">Page</th>
                  <th scope="col">View</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>TMS</td>
                  <td>21</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>LMS</td>
                  <td>43</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>OfficialSite</td>
                  <td>100</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="text-muted mt-3 mb-3">RECENT ACTIVITIES</h5>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- finalBarChar  -->
    <div style="overflow: auto; width: 100%; height: 530px;">
      <div id="chart_div2" style="width: 900px; height: 500px;"></div>
    </div>


  </div>

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

  <script src="/afterAdminLogin/assets/js/script.js"></script>
</body>

</html>