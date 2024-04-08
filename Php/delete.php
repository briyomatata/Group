<?php


require_once("config.php");



if($_GET['Delete']){
    $FName = $_GET['Delete'];
    
    $sql = "DELETE FROM dependants WHERE FirstName = '$FName'";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location:dependants.php");
    }
}





?>