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

$row = $mysqli->query("SELECT * FROM employees WHERE employee_id = '$id'");
$data = mysqli_fetch_array($row);

?>


<?php

if(isset($_POST['submit'])){

extract($_POST);

$mysqli->query("UPDATE employees SET employee_birth_date='$birthdate',gender_type='$gender', employee_mobile='$mobile',employee_email='$email', employee_joining_date='$joiningdate',
employee_designation='$designation',employee_salary='$salary',employee_photo='$photo' WHERE employee_id='$id'");

header("location:view_employee.php");

}
else{
	
	echo "<h2>Data update not successfull</h2>";
}



?>













<h2>Edit Employee Entry</h2>
<form method="post" action="">


Date Of Birth : <input type="date" name="birthdate"  value="<?php echo $data['employee_birth_date'] ?>"><br/><br/>
Gender: <input type="text" name="gender" placeholder="Input Gender" value="<?php echo $data['gender_type'] ?>"><br/><br/>
Mobile No: <input type="number" name="mobile"  value="<?php echo $data['employee_mobile'] ?>"><br/><br/>
Email: <input type="text" name="email" placeholder="Input Email Address" value="<?php echo $data['employee_email'] ?>"><br/><br/>

Joining Date : <input type="date" name="joiningdate"  value="<?php echo $data['employee_joining_date'] ?>"><br/><br/>
Designation: <input type="text" name="designation" placeholder="Input Designation" value="<?php echo $data['employee_designation'] ?>"><br/><br/>

Salary: <input type="number" name="salary" value="<?php echo $data['employee_salary'] ?>"><br/><br/>
Photo: <input type="text" name="photo" placeholder="input age" value="<?php echo $data['employee_photo'] ?>"><br/><br/>


<input type="submit" name="submit" value="SEND">
</form>

<a href="view_employee.php"> Show Data</a>
</body>
</html> 
