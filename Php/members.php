<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h2>Members List</h2>

        <div class="row p-3">
            <div class="float-end">
                <a href="" class="btn btn-success" onclick="formToggle('important');"><i class="plus">Import Excel</i></a>
            </div>
        </div>
    </div>

    <div class="col-md-12" id="importForm" style="display: none;">
    <form action="importData.php" class="row-g-3" method="post" enctype="multipart/form-data">
        <div class="col-auto">
            <label for="fileInput" class="visually-hidden">File</label>
            <input type="file" class="form-control" name="file" id="fileinput">
        </div>
        <div class="col-auto">
            <input type="submit" class="btn btn-primary mb-3" name="importSubmit" value="Import">
        </div>
    </form></div>

    <table class="table table-stripped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>*</th>
                <th>ID No</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>REG</th>
                <th>Oct</th>
                <th>Nov</th>
                <th>Dec</th>
                <th>Jan</th>
                <th>Feb</th>
                <th>Mar</th>
                <th>Apr</th>
                <th>May</th>
                <th>Jun</th>
                <th>Aug</th>
                <th>Sep</th>
                <th>Oct</th>
                <th>Nov</th>
                <th>Dec</th>
                
            </tr>
        </thead>

        <tbody>
            <?php

            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>