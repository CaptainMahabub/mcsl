<?php
require('db_config.php');


$id = $_GET['id'];

$sql = "DELETE FROM employees WHERE employee_id='$id'";
$mysqli->query($sql);
header("Location: view_employee.php");

?> 




