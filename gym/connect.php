<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobileno=$_POST['mobileno'];
$conn=new mysqli('localhost','root','','Register_db');
if($conn->connect_error){
die('Connection Failed:'.$conn->connect-error);
}else{
$stmt=$conn->prepare("insert into Details(firstname,lastname,gender,email,password,mobileno)
values(?,?,?,?,?,?)");
$stmt->bind_param("sssssi",$firstname,$lastname,$gender,$email,$password,$mobileno);
$stmt->execute();
echo "Registration successful...";
$stmt->close();
$conn->close();
}
?>