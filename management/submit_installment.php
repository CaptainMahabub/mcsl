<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	
require('db_config.php');

extract($_POST);

//$password = md5($password);
$date = date('Y-m-d h-i-s');







$mysqli->query("INSERT INTO installment VALUES
('','$accountno', '$name', '$startdate', '$enddate', '$loanamount', '$payableamount', '$installmentamount')");

if($mysqli->affected_rows>0){
	
header("location:index.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>