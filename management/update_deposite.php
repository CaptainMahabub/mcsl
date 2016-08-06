<?php
require('db_config.php');

?>

<?php
	
if(isset($_POST['update'])){
//print_r($_FILES);

extract($_POST);



$mysqli->query("UPDATE deposite SET account_no='$account_no', 
	date='$date', tracking_no='$tracking_no',
	ammount='$ammount') WHERE id='$id'");


	
header("location:index.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}



?>