<?php
  include '_dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Welcome!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    </style>
</head>

<body class="text-center" data-new-gr-c-s-check-loaded="14.1093.0" data-gr-ext-installed="" style="background-color: white">
    <main class="form-signin w-100 m-auto">
        <!-- <img src="assets/images/ASDR LOGO.png" width="100px" height="100px" alt="logohere"> -->
        <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $loginUsername = $_POST['loginUsername'];
      $loginPassword = $_POST['loginPassword'];

    //   $sql = "Select * from employees where empusername = '$loginUsername' AND emppassword = '$loginPassword'";
      //$result = mysqli_query($conn, $sql);
      //$num = mysqli_num_rows($result);
      //if ($num == 1) {


        $select = "Select * from employees where empusername = '$loginUsername' AND emppassword = '$loginPassword'";
        $result = mysqli_query($conn, $select);
       
        $select2 = "Select * from employees";
        $result2 = mysqli_query($conn, $select2);
        $row2 = mysqli_fetch_array($result2);
        $row = mysqli_fetch_array($result);

        if(mysqli_num_rows($result) > 0){
          

        if($row['usertype'] == 'admin'){
            session_start();
            $_SESSION['loggedinAdmin'] = true;
            $_SESSION['loginAdminName'] = $row['empname'];
            $_SESSION['empAdminId'] = $row['empid'];
            header('location:../TMS/afterAdminLogin/adminDashbord.php');
   
         }elseif($row['usertype'] == 'employee'){
            session_start();
            $_SESSION['loggedinUser'] = true;
            $_SESSION['loginUserName'] = $row['empname'];
            $_SESSION['empUserId'] = $row['empid'];
            $_SESSION['position'] = $row['position'];
            header('location:../TMS/afterUserLogin/userDashbord.php');
   
         }
        

        // header("location: ../TMS/afterAdminLogin/adminDashbord.php");

    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Something went wrong.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    }
    ?>

        <form action="index.php" method="post">
            <center>
            <div class="container mb-3">
                <img src="./assets/images/ASDR LOGO.png" width="200" height="80" alt="">
            </div>
            </center>
            <h1 class="h3 mb-3 fw-normal">Please log in</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="loginUsername" placeholder="Username"
                    fdprocessedid="mnu7n">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="loginPassword" id="floatingPassword"
                    placeholder="Password" fdprocessedid="zmb7fp">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" fdprocessedid="1zlzo">Sign in</button>
            <p class="mt-5 mb-3 text-muted">ASDR Infotech © 2023–2024</p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>