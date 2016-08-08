<?php
require('db_config.php');

?>

<?php
	
if(isset($_POST['update'])){
//print_r($_FILES);

extract($_POST);


$query=$mysqli->query("UPDATE deposite_withdraw SET account_no='$account_no', 
deposite_or_withdraw='$deposit_withdraw', date='$date', tracking_no='$tracking_no',
ammount='$ammount' WHERE id='$id'");


if($query)	{
header("location:view_deposite.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>







