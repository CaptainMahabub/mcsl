<?php
require('db_config.php');

?>

<?php
	
if(isset($_POST['update'])){
//print_r($_FILES);

extract($_POST);




$query=$mysqli->query("UPDATE withdraw SET account_no='$account_no', 
	date='$date', check_no='$check_no',
	ammount='$ammount' WHERE id='$id'");


if($query) {	
header("location:view_withdraw.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>