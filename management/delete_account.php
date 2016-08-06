

<?php
require('db_config.php');
$id = $_GET['id'];
$sql = "DELETE FROM account_holders WHERE account_holder_id = '$id'";
$mysqli->query($sql);
header("Location: view_account.php");
?> 


