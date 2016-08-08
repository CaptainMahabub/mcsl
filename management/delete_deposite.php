

<?php
require('db_config.php');
$id = $_GET['id'];
$sql = "DELETE FROM deposite_withdraw WHERE id = '$id'";
$mysqli->query($sql);
header("Location: view_deposite.php");
?> 


