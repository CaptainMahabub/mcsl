<?php
require('db_config.php');

?>

<?php
	
if(isset($_POST['update'])){
	//echo "<pre>";
//print_r($_POST);

extract($_POST);
$photo =$_FILES['photo']['tmp_name'];
$photoname =$_FILES['photo']['name'];
$path = "img/account_holder/";
$photopath = $path.$photoname;
move_uploaded_file($photo, $photopath);
$query=$mysqli->query("UPDATE account_holders SET account_holder_name='$name', 
	account_holder_fathersname='$fathersname', account_holder_mothersname='$mothersname',
	account_holder_birthdate='$birthdate', gender_type='$gender', account_holder_mobile='$mobile', 
	account_holder_email='$email', document_number='$nid', account_type_name='$accountType', 
	primar_savings_amount='$primaryDeposite', account_holder_present_address='$address', 
	branch_name='$brunch', verifier_name='$verifier', 
	nominee_name='$nominee', account_holder_photo='$photopath' WHERE account_holder_id='$id'");


if($query){	
header("location:view_account.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>