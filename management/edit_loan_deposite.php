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
$row = $mysqli->query("SELECT * FROM installment_deposite WHERE id ='$id'");
$data = mysqli_fetch_array($row);

?>
 
<?php

if(isset($_POST['submit'])){

extract($_POST);
/*echo "UPDATE installment SET account_no='$accountno',name='$name', start_date='$startdate', end_date='$enddate',
loan_amount='$loanamount', payable_amount='$payableamount', installment_amount='$installmentamount' 
WHERE id='$id'";
*/
$qu=$mysqli->query("UPDATE installment_deposite SET account_no='$accountno',date='$date', 
traking_no='$trakingno', amount='$amount', 
installment_no	='$installmentno' WHERE id='$id'");
if($qu){
header("location:view_loan_deposit.php");
}
}
else{
	
	echo "<h2>Data update not successfull</h2>";
}



?>
 
 
 
 
 
<h2>Edit Installment </h2>
<form method="post" action="">
Account No: <input type="number" name="accountno" placeholder="Input Account No" value="<?php echo $data['account_no'] ?>"><br/><br/>

Date: <input type="date" name="date"  value="<?php echo $data['date'] ?>"><br/><br/>

Traking No: <input type="number" name="trakingno"  value="<?php echo $data['traking_no'] ?>"><br/><br/>
 Amount: <input type="number" name="amount"  value="<?php echo $data['amount'] ?>"><br/><br/>
Installment No : <input type="number" name="installmentno"  value="<?php echo $data['installment_no'] ?>"><br/><br/>



<input type="submit" name="submit" value="Update">
</form>
	
<a href="view_loan_deposit.php"> Show deposite</a>
</body>
</html> 
