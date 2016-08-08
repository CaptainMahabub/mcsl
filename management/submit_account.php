<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	
require('db_config.php');
//print_r($_FILES);
extract($_POST);

$photo =$_FILES['photo']['tmp_name'];

$photoname =$_FILES['photo']['name'];
			
$path = "img/account_holder/";

$photopath = $path.$photoname;

move_uploaded_file($photo, $photopath);

$mysqli->query("INSERT INTO account_holders VALUES
('', '$name', '$fathersname', '$mothersname', '$birthdate', '$gender', '$mobile', '$email', '$nid', '$accountType', '$primaryDeposite', '$address', '$brunch','$verifier', '$nominee', '$photopath')");

if($mysqli->affected_rows>0){
	
$re=$mysqli->query("SELECT max(account_holder_id) as accountno FROM account_holders");
$data=$re->fetch_array();
//print_r($data);
echo "<h1>Your Account Number is: ".$data['accountno'];
}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>

<br/><br/>

<a href="view_account.php"> Show Data</a>