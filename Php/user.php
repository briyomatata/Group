<?php

include "config.php";
global $conn;
$ViewQuery = "SELECT * FROM users WHERE name = '$name'";
$Execute = mysqli_query($conn, $ViewQuery);



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

      <?php

session_start();

if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    echo "Welcome, $name!";
} else {
    echo "Welcome, Guest!";
}


?>
              
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Dependants</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
               
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Contribution</h5>
                
                <?php
                // if (isset($_SESSION["name"])) {
                  $name = "GEORGE KITHINJI";
                  global $conn;
$ViewQuery = "SELECT * FROM contribution WHERE name = '$name'";
$Execute = mysqli_query($conn, $ViewQuery);

if(mysqli_num_rows($Execute) > 0){
  while($row = mysqli_fetch_array($Execute)){
    $Total = $row["SBCRBNS"];
  $username = $row["name"];
  echo "$Total";
  }
  
}else {
  echo "No matching rows found";
}
// }
                              

?>

                
              </div>

              
            </div>
          </div>


          <?php

?>

  <script type="text/javascript">
  
  </script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
