<?php
$name=$_POST['name'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","login");
$sqli="INSERT INTO log(Name,Password) VALUES ('$name','$password')";
$b=mysqli_query($con,$sqli);
if($b)
{
    echo "Details Updated";
}
else{
    echo "Error 404";
}
?>