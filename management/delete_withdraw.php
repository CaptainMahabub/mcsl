

<?php
require('db_config.php');
$id = $_GET['id'];
$sql = "DELETE FROM withdraw WHERE id = '$id'";
$mysqli->query($sql);
header("Location: view_withdraw.php");
?> 


