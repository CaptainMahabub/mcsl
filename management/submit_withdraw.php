<?php
require('db_config.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
	
//print_r($_FILES);
extract($_POST);


$mysqli->query("INSERT INTO withdraw VALUES
('', '$account_no', '$date', '$check_no', '$ammount')");

if($mysqli->affected_rows>0){
	
header("location:view_withdraw.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>
