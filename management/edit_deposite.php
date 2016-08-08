

 <?php
require('db_config.php');
?>                         
<?php
$id = $_GET['id'];
$row = $mysqli->query("SELECT * FROM deposite_withdraw WHERE id = '$id'");
$data = $row->fetch_array();

?>

<form class = "form-inline" role = "form" name="account_form" method="post" action="update_deposite.php" enctype="multipart/form-data">
   
                            
                            
                            


<div class = "form-group">
      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id">
   </div>
   
   
   <div class = "form-group">
      <label class = "sr-only" for = "name">Account No</label>
      <input type = "text" name="account_no" class = "form-control" id = "account_no" placeholder = "Account No" value="<?php echo $data['account_no'] ?>">
   </div>

<div class = "form-group">

<label class = "sr-only" for = "select">deposite or withdraw</label>
     
      <select name="select" class = "form-control" id = "select">
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
         