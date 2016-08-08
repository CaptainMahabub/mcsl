<?php	
require('db_config.php');
if($_SERVER['REQUEST_METHOD']=="POST"){

//print_r($_FILES);
extract($_POST);
//echo "<pre>";
//print_r($_POST);


$mysqli->query("INSERT INTO deposite_withdraw VALUES
('', '$account_no', '$deposit_withdraw', '$date', '$tracking_no', '$ammount')");

if($mysqli->affected_rows>0){
	
header("location:view_deposite.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>




