

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
   <table border="2px">
                            
<div class = "form-group">

      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id" value = "<?php echo $id;?>">
   </div>
   
   
   <div class = "form-group">
      <tr>
      <th><label class = "sr-only" for = "name">Account No</label></th>
      <td>
      <input type = "text" name="account_no" class = "form-control" id = "account_no" placeholder = "Account No" value="<?php echo $data['account_no'] ?>"></td></tr>
   </div>
   
     

<div class = "form-group">

<tr>
      <th><label class = "sr-only" for = "deposit_withdraw" data-toggle="dropdown">deposite or withdraw</label></th>
      <td>
     
      <select name="deposit_withdraw" class = "form-control" id = "deposit_withdraw" value="<?php echo $data['deposite_or_withdraw'] ?>">
         <option value="">Select Type</option>
         <option value="deposite">deposite</option>
         <option value="withdraw">withdraw</option>

      </select></td></tr>
   </div>

   <div class = "form-group">
      <tr>
      <th><label class = "sr-only" for = "name">Date</label></th>
      <td>
      <input type = "date" name="date" class = "form-control" id = "date" placeholder = "Date" value="<?php echo $data['date'] ?>"></td></tr>
   </div>
   <div class = "form-group">
      <tr>
      <th><label class = "sr-only" for = "name">Tracking Number</label></th>
      <td>
      <input type = "text" name="tracking_no" class = "form-control" id = "tracking_no" placeholder = "Tracking Number" value="<?php echo $data['tracking_no'] ?>"></td></tr>
   </div>
   <div class = "form-group">
      <tr>
      <th><label class = "sr-only" for = "name">Ammount</label></th>
      <td>
      <input type="text" name="ammount" class = "form-control" id = "ammount" placeholder = "Ammount" value="<?php echo $data['ammount'] ?>"></td></tr>
   </div>
   
   <div class = "form-group">
      <tr>
      <th><input class="btn btn-primary" type="submit" name="update" value="Update"></th>
      <td></td></tr>
   </div>

   
   
</form>
         
         <a href="view_deposite.php"> Show Data</a>