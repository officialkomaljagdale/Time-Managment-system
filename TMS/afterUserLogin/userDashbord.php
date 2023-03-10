<?php
session_start();
if (!isset($_SESSION['loggedinUser']) || $_SESSION['loggedinUser'] != true) {
  header("Location: ../index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>User Pannal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../afterUserLogin/assets/css/style.css">
  <link rel="stylesheet" href="../afterUserLogin/assets/css/styleForDashbordPage.css">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Its Me'],
        ['2022/12', 1000],
        ['2023/01', 1170],
        ['2023/02', 660],
        ['2023/03', 1030]
      ]);

      var options = {
        title: 'Company Performance',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

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

</head>

<body>

  <!-- Vertical navbar -->
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center">
        <img loading="lazy" src="../assets/images/ASDR LOGO.png" alt="..." width="80" height="80"
          class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0">ASDR Infotech</h4>
          <p class="font-weight-normal text-muted mb-0">Welcome
            <?php echo $_SESSION['loginUserName'] ?>
          </p>

        </div>
      </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="userDashbord.php" class="nav-link text-dark bg-light">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-border-all"
            viewBox="0 0 16 16">
            <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z" />
          </svg>
          <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a href="userMyProfile.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person"
            viewBox="0 0 16 16">
            <path
              d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
          </svg>
          <!-- <i class="fa fa-users mr-3 text-primary fa-fw"></i> -->
          My Profile
        </a>
      </li>
      <li class="nav-item">
        <a href="userMyAttendance.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check"
            viewBox="0 0 16 16">
            <path
              d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
            <path
              d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
          </svg>
          <!-- <i class="fa fa-file mr-3 text-primary fa-fw"></i> -->
          My Attendance
        </a>
      </li>
      <li class="nav-item">
        <a href="userMyLeave.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8Zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5Z" />
          </svg>
          <!-- <i class="fa fa-letter mr-3 text-primary fa-fw"></i> -->
          My Leave
        </a>
      </li>

      <li class="nav-item">
        <a href="userMyWorkStatus.php" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files"
            viewBox="0 0 16 16">
            <path
              d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
          </svg>
          <!-- <i class="fa fa-file mr-3 text-primary fa-fw"></i> -->
          My Work Status
        </a>
      </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Other</p>

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear"
            viewBox="0 0 16 16">
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
        <a href="_logoutUser.php" class="nav-link text-dark">
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
    <div class="row row-cols-2 row-cols-md-4 g-3 mb-5">
      <div class="col">
        <div class="card h-100">
          <div class="card-body text-muted">
            <center>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clock"
                viewBox="0 0 16 16">
                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
              </svg>
              <h4 class="mt-2">1</h4>
              <h6 class="card-title mt-2">Total Working Hours</h6>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body text-muted">
            <center>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-briefcase"
                viewBox="0 0 16 16">
                <path
                  d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
              </svg>
              <h4 class="mt-2">4</h4>
              <h6 class="card-title mt-2">Projects</h6>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body text-muted">
            <center>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar"
                viewBox="0 0 16 16">
                <path
                  d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
              </svg>
              <h4 class="mt-2">3</h4>
              <h6 class="card-title mt-2">Total Leaves</h6>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body text-muted">
            <center>
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-lg"
                viewBox="0 0 16 16">
                <path
                  d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
              </svg>
              <h4 class="mt-2">0</h4>
              <h6 class="card-title mt-2">Working Status Accepted</h6>
            </center>
          </div>
        </div>
      </div>
      <br>
      <br>
    </div>

    <div id="curve_chart" class="shadow" style="width: 900px; height: 500px"></div>
    <br>
    <br>
    <div class="row row-cols-1 row-cols-md-2 g-3">
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
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <div id="donutchart" style="width: 400px; height: 300px; padding: 0; margin: 0;"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- You can find the library code from below link  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- end of library link  -->



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