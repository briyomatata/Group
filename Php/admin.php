<?php

include "config.php";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../Css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
  
    <div id="wrapper">
      <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">Welfare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav side-nav" >
            <li class="nav-item">
              <a class="nav-link" style="margin-left: 20px;" href="../php/home.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/admins.php" style="margin-left: 20px;">Dependants</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/categories.php" style="margin-left: 20px;">Data</a>
            </li>
            
          </ul>
          <ul class="navbar-nav ml-md-auto d-md-flex">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admins/login-admins.html">login
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                username
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Logout</a>
                
            </li>
                            
            
          </ul>
        </div>
      </div>
      </nav>
      <div class="container-fluid">
              
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Dependants</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
                <?php
             global $conn;
             $sql = "SELECT COUNT(*) as count FROM dependants";
             $Execute = mysqli_query($conn, $sql);
             $row = mysqli_fetch_assoc($Execute);

             $num_rows = $row["count"];

             echo "$num_rows";
            ?>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Contributions</h5>
                <?php
             global $conn;
             $sql = "SELECT COUNT(*) as count FROM contribution";
             $Execute = mysqli_query($conn, $sql);
             $row = mysqli_fetch_assoc($Execute);

             $num_rows = $row["count"];

             echo "$num_rows";
            ?>
              
                
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Number of Users</h5>
                <?php
             global $conn;
             $sql = "SELECT COUNT(*) as count FROM users";
             $Execute = mysqli_query($conn, $sql);
             $row = mysqli_fetch_assoc($Execute);

             $num_rows = $row["count"];

             echo "$num_rows";
            ?>
              
                
              </div>
            </div>
          </div>

          
        </div>
        <div class = "table-responsive">
            <table class ="table table-striped table-hover">
                <tr>
                    <th>ID Number.</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Registration</th>
                    <th>October</th>
                    <th>November</th>
                    <th>December</th>
                    <th>January</th>
                    <th>February</th>
                    <th>March</th>
                    <th>April</th>
                    <th>May</th>
                    <th>June</th>
                    <th>July</th>
                    <th>August</th>
                    <th>September</th>
                    <th>October</th>
                    <th>November</th>
                    <th>December</th>
                    <th>Totals</th>
                </tr>

                <?php   

                global $conn;
                $ViewQuery = "SELECT * FROM contribution ORDER BY id desc";
                $Execute = mysqli_query($conn, $ViewQuery);
                while($DataRows = mysqli_fetch_array($Execute)){
                    $Id = $DataRows["id"];
                    $Name = $DataRows["name"];
                    $Phone = $DataRows["phonenumber"];
                    $Reg = $DataRows["Registration"];
                    $Oct = $DataRows["Oct"];
                    $Nov = $DataRows["Nov"];
                    $Dec = $DataRows["Dec"];
                    $Jan = $DataRows["Jan"];
                    $Feb = $DataRows["Feb"];
                    $Mar = $DataRows["Mar"];
                    $Apr = $DataRows["Apr"];
                    $May = $DataRows["May"];
                    $Jun = $DataRows["Jun"];
                    $Jul = $DataRows["Jul"];
                    $Aug = $DataRows["Aug"];
                    $Sep = $DataRows["Sep"];
                    $October = $DataRows["October"];
                    $November = $DataRows["November"];
                    $December = $DataRows["December"];
                    $Total = $DataRows["SBCRBNS"];
                    
                



?>

<tr>
    <td><?php echo $Id; ?></td>
    <td><?php echo $Name; ?></td>
    <td><?php echo $Phone; ?></td>
    <td><?php echo $Reg; ?></td>
    <td><?php echo $Oct; ?></td>
    <td><?php echo $Nov; ?></td>
    <td><?php echo $Dec; ?></td>
    <td><?php echo $Jan; ?></td>
    <td><?php echo $Feb; ?></td>
    <td><?php echo $Mar; ?></td>
    <td><?php echo $Apr; ?></td>
    <td><?php echo $May; ?></td>
    <td><?php echo $Jun; ?></td>
    <td><?php echo $Jul; ?></td>
    <td><?php echo $Aug; ?></td>
    <td><?php echo $Sep; ?></td>
    <td><?php echo $October; ?></td>
    <td><?php echo $November; ?></td>
    <td><?php echo $December; ?></td>
    <td><?php echo $Total; ?></td>

    
</tr>

<?php } ?>
            </table>
        </div>

              </div>
            </div>
          </div>
        </div>
      
      </div>

 


    </div>
  <script type="text/javascript">
  
  </script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
