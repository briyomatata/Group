
<?php


session_start();

include "../Php/config.php";

if(isset($_POST["submit"])){
    $Name = $_POST['username'];
    $Month = $_POST['month'];
    $Amount = $_POST['amount'];

    $Sql_Query = "INSERT INTO contribution (username,Months,Amount) values ('$Name','$Month','$Amount')";
    $Execute = mysqli_query($conn,$Sql_Query);

    if($Execute){
        header('add_contribution.php');
    }
    else{
        header('add_contribution.php');
        echo "Problem Encountered";
    }
}


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
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Payment Records
                            </a>

                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Benefits
                            </a>

                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Profile
                            </a>

                            <a class="nav-link" href="index.html">
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
                <div class="container-fluid mt-5 mx-auto">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <h2>Add Contribution Details</h2>
                    </div>
                    <div class="panel panel-body">
                        <form action="add-contribution.php" method="post">
                            <div class="form-group">
                                <label for="firstName">UserName</label>
                                <select class="form-control" name="username" id="userselect"
                                    placeholder="Choose UserName">
                                    <?php

                                    global $conn;
                                    $ViewQuery = "SELECT * FROM users";
                                    $Execute = mysqli_query($conn, $ViewQuery);
                                    while ($DataRows = mysqli_fetch_array($Execute)) {
                                        $Id = $DataRows["user_id"];
                                        $UserName = $DataRows["username"];
                                        ?>

                                        <option>
                                            <?php
                                            echo $UserName;
                                            ?>
                                        </option>

                                    <?php } ?>
                                </select>
                            </div>
                    

                            <div class="form-group">
                                <label for="lastName">Month</label>
                                <input type="date" name="month" class="form-control" id="month"
                                    placeholder="Enter the Month" />
                            </div>



                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" name="amount" class="form-control" id="amount"
                                    placeholder="Enter the  Amount" />
                            </div>


                                <input type="submit" name="submit" class="btn btn-primary mt-4">
                        </form>

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
