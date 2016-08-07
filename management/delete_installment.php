

<?php
require('db_config.php');
$id = $_GET['id'];
$sql = "DELETE FROM installment WHERE id = '$id'";
$mysqli->query($sql);
header("Location: view_installment.php");
?> 


