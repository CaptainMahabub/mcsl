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
$emp_name = $_GET['emp_name'];
$row = $mysqli->query("SELECT * FROM employee_salary WHERE salary_id = '$id'");
$data = mysqli_fetch_array($row);

?>
 
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

extract($_POST);

$mysqli->query("UPDATE employee_salary SET month_name='$month', year_name='$year', salary_ammount='$salary', salary_pay_date='$salarypaydate' WHERE employee_id='$id'");

header("location:view_employee_salary.php");

}


?>
 
 
 
 
 
<h2>Edit Salary </h2>
<form method="post" action="">
Employee Name:<b><?php echo $emp_name ?></b>
<br/><br/>
Month: <input type="text" name="month" placeholder="input month" value="<?php echo $data['month_name'] ?>"><br/><br/>
Year: <input type="number" name="year" placeholder="input year" value="<?php echo $data['year_name'] ?>"><br/><br/>
Salary : <input type="number" name="salary" placeholder="input salary" value="<?php echo $data['salary_ammount'] ?>"><br/><br/>
Salary Pay Date : <input type="date" name="salarypaydate" placeholder="input date" value="<?php echo $data['salary_pay_date'] ?>"><br/><br/>


<input type="submit" name="submit" value="Update">
</form>
	
<a href="view_employee_salary.php"> Show Salary </a>
</body>
</html> 
