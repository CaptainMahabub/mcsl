                     
                            
                                                 
  <?php
require('db_config.php');
?>                                    
                            
<?php
$id = $_GET['id'];
$row = $mysqli->query("SELECT * FROM  withdraw WHERE id = '$id'");
$data = $row->fetch_array();

?>


<h2>Edit Withdraw</h2>

<form class = "form-inline" role = "form" name="account_form" method="post" action="update_withdraw.php" enctype="multipart/form-data">          
   
   <div class = "form-group">
      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id" value = "<?php echo $id;?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Account No</label>
      <input type = "text" name="account_no" class = "form-control" id = "account_no" placeholder = "Account No" value="<?php echo $data['account_no'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Date</label>
      <input type = "date" name="date" class = "form-control" id = "date" placeholder = "date" value="<?php echo $data['date'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Check no</label>
      <input type = "text" name="check_no" class = "form-control" id = "check_no" placeholder = "check_no" value="<?php echo $data['check_no'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Ammount</label>
      <input type="text" name="ammount" class = "form-control" id = "ammount" placeholder = "ammount" value="<?php echo $data['ammount'] ?>">
   </div>
   
   <div class = "form-group">
      <input class="btn btn-primary" type="submit" name="update" value="Update">
   </div>
   
</form>

<a href="view_withdraw.php"> Show Data</a>



