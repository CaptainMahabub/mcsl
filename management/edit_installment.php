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
$row = $mysqli->query("SELECT * FROM installment WHERE id ='$id'");
$data = mysqli_fetch_array($row);

?>
 
<?php

if(isset($_POST['submit'])){

extract($_POST);
/*echo "UPDATE installment SET account_no='$accountno',name='$name', start_date='$startdate', end_date='$enddate',
loan_amount='$loanamount', payable_amount='$payableamount', installment_amount='$installmentamount' 
WHERE id='$id'";
*/
$qu=$mysqli->query("UPDATE installment SET account_no='$accountno',name='$name',start_date='$startdate', 
end_date='$enddate',loan_amount='$loanamount', payable_amount='$payableamount', 
installment_amount='$installmentamount' WHERE id='$id'");
if($qu){
header("location:view_installment.php");
}
}
else{
	
	echo "<h2>Data update not successfull</h2>";
}



?>
 
 
 
 
 
<h2>Edit Installment </h2>
<form method="post" action="">
Account No: <input type="number" name="accountno" placeholder="Input Account No" value="<?php echo $data['account_no'] ?>"><br/><br/>
Name: <input type="text" name="name" placeholder="Input Name" value="<?php echo $data['name'] ?>"><br/><br/>
Start Date: <input type="date" name="startdate"  value="<?php echo $data['start_date'] ?>"><br/><br/>
End Date: <input type="date" name="enddate"  value="<?php echo $data['end_date'] ?>"><br/><br/>
Loan Amount: <input type="number" name="loanamount"  value="<?php echo $data['loan_amount'] ?>"><br/><br/>
Payable Amount: <input type="number" name="payableamount"  value="<?php echo $data['payable_amount'] ?>"><br/><br/>
Installment : <input type="number" name="installmentamount"  value="<?php echo $data['installment_amount'] ?>"><br/><br/>



<input type="submit" name="submit" value="Update">
</form>
	
<a href="view_installment.php"> Show Installment </a>
</body>
</html> 
