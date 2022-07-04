<?php
 
// Importing DBConfig.php file.
include 'DbConnect.php';
 

 $Name = $_POST['name'];
 $IC = $_POST['IC'];
 $PhoneNo = $_POST['phoneNo'];
 $Address = $_POST['Address'];
 $Email = $_POST['Email'];
 $password=$_POST["password"];
 $passwordC=$_POST["passwordC"];
 // Creating SQL query and insert the record into MySQL database table.

 if($password == $passwordC){
    include_once("dbConnect.php");
    mysqli_select_db($conn,"dziya98");
    $query="INSERT INTO foodBox (Name,IC,PhoneNo,Address,Email,password) values ('$Name','$IC','$PhoneNo','$Address','$Email','$password1')";
    
    $run_query=mysqli_query($conn,$query);
    
    if($run_query){
        echo"<script>alert('REGISTER SUCCESS')</script>";
    }
    else{
        echo"<script>alert('UNSUCCESS')</script>";
    }
}
else{
    echo"<script>alert('PASSWORD NOT SAME')</script>";
}
 mysqli_close($con);
?>