<?php

include "../Php/config.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>

<div class="container my-5">

    <form method="post" action="reg_logic.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">PhoneNumber</label>
          <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Gender</label>
          <select class="form-control" name="gender" id="genderselect"
                                    placeholder="Choose Your Gender">
                                    <?php

                                    global $conn;
                                    $ViewQuery = "SELECT * FROM gender";
                                    $Execute = mysqli_query($conn, $ViewQuery);
                                    while ($DataRows = mysqli_fetch_array($Execute)) {
                                        $Id = $DataRows["id"];
                                        $GenderName = $DataRows["G_name"];
                                        ?>

                                        <option>
                                            <?php
                                            echo $GenderName;
                                            ?>
                                        </option>

                                    <?php } ?>
                                </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
        </div>
        
        <button  type="submit" name="submit" class="btn btn-primary my-5">Submit</button>
      </form>
</div>

</body>
</html>