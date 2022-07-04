<?php
$nama=$_POST["username"];
$pass=$_POST["pass"];

echo $pass;



include_once("dbConnect.php");

mysqli_select_db($conn,"dziya98");

$query="INSERT INTO asgmn2_register (Name,password) VALUES ('$nama', '$pass')";

$run_query=mysqli_query($conn,$query);

if($run_query){
    if($bmi<18.5){
        echo "<script>alert('Your Result BMI is Underweight')</script>" ;
        }
    else if($bmi>=18.5 &&$bmi<24.9){
        echo "<script>alert('Your Result BMI is Healthy Weight')</script>" ;
        }
    else if($bmi>=24.9 && $bmi <29.9){
        echo "<script>alert('Your Result BMI is Overweight')</script>" ;
        }
    else if($bmi>=40.0){
        echo "<script>alert('Your Result BMI is Obese')</script>" ;
        }
    else{
        // alert("PLEASE PUT IN CORRECT VALUE");
        return false;}
}
else{
    echo"<script>alert('UNSUCCESS')</script>";
}
?>
