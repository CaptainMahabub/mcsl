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
$row = $mysqli->query("SELECT * FROM employee_salary WHERE salary_id = '$id'");
$data = mysqli_fetch_array($row);

?>
 
<?php

if(isset($_POST['submit'])){

extract($_POST);

$mysqli->query("UPDATE employee_salary SET employee_name='$name', month_name='$month', year_name='$year', salary_ammount='$salary', salary_pay_date='$salarypaydate' WHERE salary_id='$id'");

header("location:view_employee_salary.php");

}
else{
	
	echo "<h2>Data update not successfull</h2>";
}



?>
 
 
 
 
 
<h2>Edit Salary </h2>
<form method="post" action="">
Employee Name: <input type="text" name="name" placeholder="input name" value="<?php echo $data['employee_name'] ?>"><br/><br/>
Month: <input type="text" name="month" placeholder="input age" value="<?php echo $data['month_name'] ?>"><br/><br/>
Year: <input type="number" name="year" placeholder="input age" value="<?php echo $data['year_name'] ?>"><br/><br/>
Salary : <input type="number" name="salary" placeholder="input age" value="<?php echo $data['salary_ammount'] ?>"><br/><br/>
Salary Pay Date : <input type="date" name="salarypaydate" placeholder="input age" value="<?php echo $data['salary_pay_date'] ?>"><br/><br/>


<input type="submit" name="submit" value="Update">
</form>
	
<a href="view_employee_salary.php"> Show Salary </a>
</body>
</html> 
