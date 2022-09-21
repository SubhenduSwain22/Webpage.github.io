<?php
$Firstname=$_POST['Firstname'];
$Email=$_POST['Email'];
$Number=$_POST['Number'];
$Mssg=$_POST['Mssg'];

$conn= new mysqli('localhost','root','','portfolio');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare(" insert into queries(Firstname, Email, Number, Mssg) values(?,?,?,?)");
	$stmt->bind_param("ssis",$Firstname,$Email,$Number,$Mssg);
	$stmt->execute();
	echo"Recieved Sucessfully.......I Will Contact You SOON!!!!!!!!!! ";
	$stmt->close();
	$conn->close();
}
?>