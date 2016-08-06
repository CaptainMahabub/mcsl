<?php
require('db_config.php');

?>

<?php
	
if(isset($_POST['update'])){
//print_r($_FILES);

extract($_POST);



$mysqli->query("UPDATE withdraw SET account_no='$account_no', 
	date='$date', check_no='$check_no',
	ammount='$ammount') WHERE id='$id'");


	
header("location:index.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}



?>