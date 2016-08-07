<?php
require('db_config.php');
$id = $_GET['id'];
$query=$mysqli->query("DELETE FROM employee_salary WHERE salary_id='$id'");
if($query)header("Location: view_employee_salary.php");

?> 

