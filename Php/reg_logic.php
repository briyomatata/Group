<?php



include "../Php/config.php";

if (isset($_POST["submit"])) {
    $User = $_POST['name'];
    $Mobile = $_POST['mobile'];
    $Email = $_POST['email'];
    $Gender = $_POST['gender'];
    $Pass = $_POST['password'];

    $CheckSQL = "SELECT * FROM users WHERE phonenumber='$Mobile'";
 
 $check = mysqli_fetch_array(mysqli_query($conn,$CheckSQL));
 
 if(isset($check)){

 echo 'Phone Number Already Exist!!';

 }
 else{ 
    $Sql_Query = "INSERT INTO users (phonenumber,email,username,gender,mypassword) values ('$Mobile','$Email','$User','$Gender','$Pass')";
    
     if(mysqli_query($conn,$Sql_Query))
    {
      header('register.php');
     echo 'Registration is Successfull';
    }else{
      header('register.php');
      echo 'Try Again';
    }
    
    
    
     }

}
?>