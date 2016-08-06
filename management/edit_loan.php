<?php
require('db_config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


 
 
 <?php
$id = $_GET['id'];
$row = $mysqli->query("SELECT * FROM new_loan WHERE newloan_id = '$id'");
$data = mysqli_fetch_array($row);

?>
 
<?php

if(isset($_POST['submit'])){

extract($_POST);

$mysqli->query("UPDATE new_loan SET account_no='$accountno',date='$date', loan_amount='$amount',installment='$install', grantors='$grantors' WHERE newloan_id='$id'");

header("location:view_loan.php");

}
else{
	
	echo "<h2>Data update not successfull</h2>";
}



?>
 
 
 
 
 
<h2>Edit Loan </h2>
<form method="post" action="">
Account No: <input type="number" name="accountno" placeholder="Input Account No" value="<?php echo $data['accountno'] ?>"><br/><br/>
Date: <input type="date" name="date"  value="<?php echo $data['date'] ?>"><br/><br/>
Loan Amount: <input type="number" name="amount"  value="<?php echo $data['amount'] ?>"><br/><br/>
Installment : <input type="number" name="install"  value="<?php echo $data['installment'] ?>"><br/><br/>
Grantors : <input type="text" name="grantors" placeholder="Input Grantors " value="<?php echo $data['grantors'] ?>"><br/><br/>


<input type="submit" name="submit" value="Update">
</form>
	
<a href="view_loan.php"> Show Loan </a>
</body>
</html> 
