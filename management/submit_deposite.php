<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	
require('db_config.php');
//print_r($_FILES);
extract($_POST);



$mysqli->query("INSERT INTO deposite VALUES
('', '$account_no', '$date', '$tracking_no', '$ammount')");

if($mysqli->affected_rows>0){
	
header("location:index.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>