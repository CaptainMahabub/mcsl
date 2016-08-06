<?php
require('db_config.php');

if(isset($_GET['id']))
{
$id = $_GET['id'];
mysqli_query("DELETE FROM employee_salary WHERE salary_id='$id'");
header("Location: view_employee_salary.php");

}














?> 
