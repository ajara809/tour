<?php
$name=$_POST['name'];
$age=$_POST['age'];
$native=$_POST['native'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$place=$_POST['place'];
$people=$_POST['peoples'];
$type=$_POST['p'];
$packages=$_POST['x'];
$conn=mysqli_connect("localhost","root","","register");
$sql="INSERT INTO reg(Name,Age,Native,Contact,Email,Place,Peoples,FFC,Packages) VALUES ('$name','$age','$native','$contact',
'$email','$place','$people','$type','$packages')";
$a=mysqli_query($conn,$sql);
if($a)
{
    echo "Your Details are Updated in Our System";
    echo " We Conatct You Within 2 Days";
    echo " Thank You!";
}
else{
    echo "Error 404";
}
?>