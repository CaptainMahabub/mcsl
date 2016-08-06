<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	
require('db_config.php');

extract($_POST);

//$password = md5($password);
$signupdate = date('Y-m-d');

$photo =$_FILES['photo']['tmp_name'];

$photoname =$_FILES['photo']['name'];
			
$path = "img/employee/";

$photopath = $path.$photoname;
print_r ($_FILES);

move_uploaded_file($photo, $photopath);




$mysqli->query("INSERT INTO employees VALUES
('', '$name', '$fathersname', '$mothersname', '$birthdate', '$gender', '$mobile', '$email', '$nid', '$address', '$joiningdate', '$designation', '$salary', '$photopath')");

if($mysqli->affected_rows>0){
	
header("location:index.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>