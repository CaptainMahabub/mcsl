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
$row = mysql_query("SELECT * FROM employees WHERE employee_id = '$id'");
$data = mysql_fetch_array($row);

?>

<h2>Edit Employee Entry</h2>
<form method="post" action="">
Employee Name: <input type="text" name="name" placeholder="Input Name" value="<?php echo $data['name'] ?>"><br/><br/>
Fathers Name: <input type="text" name="fathersname" placeholder="Input Father Name" value="<?php echo $data['fathersname'] ?>"><br/><br/>
Mothers Name: <input type="text" name="mothersname" placeholder="Input Mother Name" value="<?php echo $data['mothersname'] ?>"><br/><br/>
Date Of Birth : <input type="date" name="birthdate"  value="<?php echo $data['birthdate'] ?>"><br/><br/>
Gender: <input type="text" name="gender" placeholder="Input Gender" value="<?php echo $data['gender'] ?>"><br/><br/>
Mobile No: <input type="number" name="mobile"  value="<?php echo $data['mobile'] ?>"><br/><br/>
Email: <input type="text" name="email" placeholder="Input Email Address" value="<?php echo $data['email'] ?>"><br/><br/>
Document Number: <input type="text" name="nid" placeholder="Input NID" value="<?php echo $data['nid'] ?>"><br/><br/>
Present Address: <input type="text" name="address" placeholder="Input Address" value="<?php echo $data['address'] ?>"><br/><br/>
Joining Date : <input type="date" name="joiningdate"  value="<?php echo $data['joiningdate'] ?>"><br/><br/>
Designation: <input type="text" name="designation" placeholder="Input Designation" value="<?php echo $data['designation'] ?>"><br/><br/>

Salary: <input type="number" name="salary" value="<?php echo $data['salary'] ?>"><br/><br/>
Photo: <input type="text" name="photo" placeholder="input age" value="<?php echo $data['photopath'] ?>"><br/><br/>


<input type="submit" name="submit" value="SEND">
</form>

<a href="view_employee.php"> Show Data</a>
</body>
</html> 
