<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	
require('db_config.php');

extract($_POST);

//$password = md5($password);
//$salarypaydate = date('Y-m-d h-i-s');





$mysqli->query("INSERT INTO employee_salary  VALUES
('', '$employeename', '$month', '$year', '$salary', '$salarypaydate')");

if($mysqli->affected_rows>0){
	
header("location:view_employee_salary.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>