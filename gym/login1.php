<?php

error_reporting(0);

$email=$_POST['email'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','Register_db');
if($conn->connect_error){
die('Failed to connect:'.$conn->connect_error);
}
else{
$stmt=$conn->prepare("select * from Details where email=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt_result=$stmt->get_result();
if($stmt_result->num_rows > 0){
$data=$stmt_result->fetch_assoc();
if($data['password']===$password){
include 'payment.html';
}

else{

echo"<h2>Invalid Email or password</h2>";
}

}

else{
echo"<h2>Invalid Email or password</h2>";
}
}
?>