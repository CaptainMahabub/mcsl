<?php
if($_SERVER['REQUEST_METHOD']=="POST"){	
require('db_config.php');
extract($_POST);
if($installment==12){$interest_amount=($loanamount*.10);}
elseif($installment==24){$interest_amount=($loanamount*.12);}
elseif($installment==36){$interest_amount=($loanamount*.15);}
$date = date('Y-m-d h-i-s');
$mysqli->query("INSERT INTO new_loan VALUES
('','$accountno', '$date', '$loanamount', '$interest_amount', '$installment', '$grantors')");

if($mysqli->affected_rows>0){
	
header("location:view_loan.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}
}

?>