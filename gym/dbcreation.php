<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
die("Sorry we failed to connect:".mysqli_connect_error());
}
else{
echo"Connection was successful<br>";
}
$sql="CREATE DATABASE Register_db";
$result=mysqli_query($conn,$sql);
if($result){
echo"The db was created succesfully!<br>";
}
else{
echo"The db was not created succesfully because of this error --".mysqli_error($conn);
}
?>
