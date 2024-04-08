<?php

session_start();

include "../Php/config.php";



if(isset($_POST["submit"])){
    $name = $_POST['name'];
$password = $_POST['password'];

$Query = "SELECT * from users where username ='".$name."' AND mypassword ='".$password."'";
$result = mysqli_query($conn, $Query);

$row = mysqli_fetch_array($result);

if ($result->num_rows == 1) {
    // Authentication successful

    // $userData = $result->fetch_assoc();
    // $_SESSION['user_data'] = $userData;
    $email = $row['email'];
    $phone = $row['phonenumber'];
    $gender = $row['gender'];
    $user_id = $row['user_id'];

    
    $_SESSION['user_id'] = $user_id;
    $_SESSION['username'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phonenumber'] = $phone;
    $_SESSION['gender'] = $gender;
    $_SESSION['logged_in'] = true;
    header("location: dashboard.php"); // Redirect to the account page
} else {
  
    echo "Your Login Name or Password is invalid";
}
}



?>