<?php

session_start();

include "../Php/config.php";

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../Css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Laiser Hill SDA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="../Php/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="../Php/dependants.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Beneficiaries
                            </a>
                            <a class="nav-link" href="../Php/contribution.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Payment Records
                            </a>

                            <a class="nav-link" href="../Php/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Benefits
                            </a>
                            <a class="nav-link" href="../Php/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Profile
                            </a>

                            <a class="nav-link" href="../Php/dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               FAQs
                            </a>
                            <!-- <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a> -->

                            
                           
                           
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid mt-5">


<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <!-- <h5 class="card-title mb-4 d-inline">Dependants</h5> -->
        <a href="../Php/add-dependant.php" class="btn btn-primary mb-4 text-center float-right">Add Dependants</a>

        <table class="table">
          <thead>
            <tr>
              <th>Sr No.</th>
              <th>FirstName</th>
              <th>MiddleName</th>
              <th>LastName</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Update</th>
              <th>Delete</th>
              <?php


// if (!isset($_SESSION['id'])) {
//     header("Location: login.php");
//     exit();
// }
?>

              <?php
              global $conn;
              // session_start();
              $user_id = ($_SESSION['user_id']);
              $ViewQuery = "SELECT * FROM dependants WHERE user_id= $user_id";
              $Execute = mysqli_query($conn, $ViewQuery);
              $SrNo = 0;
              while ($DataRows = mysqli_fetch_array($Execute)) {
                $Id = $DataRows["Dep_id"];
                $FName = $DataRows["FirstName"];
                $MName = $DataRows["MiddleName"];
                $LName = $DataRows["LastName"];
                $Age = $DataRows["Age"];
                $Gender = $DataRows["Gender"];
                $SrNo++;




                ?>

              <tr>
                <td>
                  <?php echo $SrNo; ?>
                </td>
                <td>
                  <?php echo $FName; ?>
                </td>
                <td>
                  <?php echo $MName; ?>
                </td>
                <td>
                  <?php echo $LName; ?>
                </td>
                <td>
                  <?php echo $Age; ?>
                </td>
                <td>
                  <?php echo $Gender; ?>
                </td>
                <td> <a href="../php/update.php?Edit=<?php echo $Name; ?>">
                    <span class="btn btn-warning">Edit</span> </a> </td>
                <td> <a href="../Php/delete.php?Delete=<?php echo $FName; ?>">
                    <span class="btn btn-danger">Delete</span> </a> </td>
              </tr>

            <?php } ?>

            </tr>
          </thead>

        </table>
      </div>
    </div>
  </div>
</div>

</div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../Js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
