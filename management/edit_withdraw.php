                     
                            
                                                 
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
<table border="2px">      
   
   <div class = "form-group">
      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id" value = "<?php echo $id;?>">
   </div>
   <div class = "form-group">
   <tr>
      <th>
      <label class = "sr-only" for = "name">Account No</label></th>
      <td>
      <input type = "text" name="account_no" class = "form-control" id = "account_no" placeholder = "Account No" value="<?php echo $data['account_no'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   <tr>
      <th>
      <label class = "sr-only" for = "name">Date</label></th>
      <td>
      <input type = "date" name="date" class = "form-control" id = "date" placeholder = "date" value="<?php echo $data['date'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   <tr>
      <th>
      <label class = "sr-only" for = "name">Check no</label></th>
      <td>
      <input type = "text" name="check_no" class = "form-control" id = "check_no" placeholder = "check_no" value="<?php echo $data['check_no'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   <tr>
      <th>
      <label class = "sr-only" for = "name">Ammount</label></th>
      <td>
      <input type="text" name="ammount" class = "form-control" id = "ammount" placeholder = "ammount" value="<?php echo $data['ammount'] ?>"></td></tr>
   </div>
   
   <div class = "form-group">
   <tr>
      <th>
      <input class="btn btn-primary" type="submit" name="update" value="Update"></th>
      <td></td></tr>
   </div>
   </table>
   
</form>

<a href="view_withdraw.php"> Show Data</a>



