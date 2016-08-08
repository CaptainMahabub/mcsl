

 <?php
require('db_config.php');
?>                         
<?php
$id = $_GET['id'];
$row = $mysqli->query("SELECT * FROM deposite_withdraw WHERE id = '$id'");
$data = $row->fetch_array();

?>


<h2>Edit Deposite</h2>

<form class = "form-inline" role = "form" name="account_form" method="post" action="update_deposite.php" enctype="multipart/form-data">
   
                            
<div class = "form-group">
      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id" value = "<?php echo $id;?>">
   </div>
   
   
   <div class = "form-group">
      <label class = "sr-only" for = "name">Account No</label>
      <input type = "text" name="account_no" class = "form-control" id = "account_no" placeholder = "Account No" value="<?php echo $data['account_no'] ?>">
   </div>
   
     

<div class = "form-group">

<label class = "sr-only" for = "deposit_withdraw">deposite or withdraw</label>
     
      <select name="deposit_withdraw" class = "form-control" id = "deposit_withdraw" value="<?php echo $data['deposite_or_withdraw'] ?>">
         <option value="">Select Type</option>
         <option value="deposite">deposite</option>
         <option value="withdraw">withdraw</option>

      </select>
   </div>

   <div class = "form-group">
      <label class = "sr-only" for = "name">Date</label>
      <input type = "date" name="date" class = "form-control" id = "date" placeholder = "Date" value="<?php echo $data['date'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Tracking Number</label>
      <input type = "text" name="tracking_no" class = "form-control" id = "tracking_no" placeholder = "Tracking Number" value="<?php echo $data['tracking_no'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Ammount</label>
      <input type="text" name="ammount" class = "form-control" id = "ammount" placeholder = "Ammount" value="<?php echo $data['ammount'] ?>">
   </div>
   
   <div class = "form-group">
      <input class="btn btn-primary" type="submit" name="update" value="Update">
   </div>

   
   
</form>
         
         <a href="view_deposite.php"> Show Data</a>