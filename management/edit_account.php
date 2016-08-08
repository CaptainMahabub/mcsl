<?php
require('db_config.php');
?>                         
<?php
$id = $_GET['id'];
$row = $mysqli->query("SELECT * FROM account_holders WHERE account_holder_id = '$id'");
$data = $row->fetch_array();

?>



<h2>Edit Account</h2>
                

<form class = "form-inline" role = "form" name="account_form" method="post" action="update_account.php" enctype="multipart/form-data">
   <table border="2px">
   <div class = "form-group">
      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id" value = "<?php echo $id;?>">
   </div>
   <div class = "form-group">
   
   
   <tr>
      <th> <label class = "sr-only" for = "name">Name</label></th>
      <td><input type = "text" name="name" class = "form-control" id = "name" placeholder = "Name" value="<?php echo $data['account_holder_name'] ?>"></td></tr>
   </div>
   
   <div class = "form-group">
   
     <tr><th> <label class = "sr-only" for = "name">Father's Name</label></th>
      <td><input type = "text" name="fathersname" class = "form-control" id = "name" placeholder = "Father's Name" value="<?php echo $data['account_holder_fathersname'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   
     <tr><th><label class = "sr-only" for = "name">Mother's Name</label></th>
      <td>
      <input type = "text" name="mothersname" class = "form-control" id = "name" placeholder = "Mother's Name" value="<?php echo $data['account_holder_mothersname'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   
   
      <tr><th><label class = "sr-only" for = "name">Birth Date</label></th>
      <td>
      <input type="date" name="birthdate" class = "form-control" id = "name" placeholder = "Birth Date" value="<?php echo $data['account_holder_birthdate'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   
   
      <tr><th><label class = "sr-only" for = "name">Gender</label></th>
      <td>
      <input type="radio" name="gender" value="female">Female       
      <input type="radio" name="gender" value="male">Male</td></tr>
   </div>
   <div class = "form-group">
   
   
      <tr><th><label class = "sr-only" for = "name">Mobile No</label></th>
      <td>
      <input type="text" name="mobile" class = "form-control" id = "name" placeholder = "Mobile No" value="<?php echo $data['account_holder_mobile'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   
   
      <tr><th><label class = "sr-only" for = "name">E-mail</label></th>
      <td>
      <input type="email" name="email" class = "form-control" id = "name" placeholder = "E-mail" value="<?php echo $data['account_holder_email'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   
   
      <tr><th><label class = "sr-only" for = "name">NID Number</label></th>
      <td>
      <input type"number" name="nid" class = "form-control" id = "name" placeholder = "NID Number" value="<?php echo $data['document_number'] ?>"></td></tr>
   </div>
   <div class = "form-group">
     <tr><th> <label class = "sr-only" for = "name">Account Type</label></th>
      <td>
      <input type = "text" name="accountType" class = "form-control" id = "name" placeholder = "Account Type" value="<?php echo $data['account_type_name'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   
   
     <tr><th> <label class = "sr-only" for = "name">Primary Deposit</label></th>
      <td>
      <input type = "text" name="primaryDeposite" class = "form-control" id = "" value="<?php echo $data['primar_savings_amount'] ?>"></td></tr></div>
   <div class = "form-group">
   
   
      <tr><th><label class = "sr-only" for = "name">Address</label></th>
      <td>
      <!--<input type = "text" name="address" class = "form-control" id = "name" placeholder = "Address">-->
      <textarea name="address" class = "form-control" id = "name" placeholder="Enter Address" ><?php echo $data['account_holder_present_address'] ?></textarea></td></tr>
   </div>
   <div class = "form-group">
   
   
      <tr><th><label class = "sr-only" for = "name">Branch</label></th>
      <td>
      <input type = "text" name="brunch" class = "form-control" id = "name" placeholder = "Branch" value="<?php echo $data['branch_name'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   
     <tr><th> <label class = "sr-only" for = "name">Verifier</label></th>
      <td>
      <input type = "text" name="verifier" class = "form-control" id = "name" placeholder = "Verifier" value="<?php echo $data['verifier_name'] ?>"></td></tr>
   </div>
   <div class = "form-group">
   
   
     <tr><th> <label class = "sr-only" for = "name">Nominee</label></th>
      <td>
      <input type = "text" name="nominee" class = "form-control" id = "name" placeholder = "Nominee" value="<?php echo $data['nominee_name'] ?>"></td></tr>
   </div>
   
   <div class = "form-group">
   
   
     <tr><th> <label class = "sr-only" for = "photo">Photo</label></th>
      <td>
      <input type = "file" name="photo" id = "photo"></td></tr>
   </div>
   <div class = "form-group">
   
   <tr><th>
      <input class="btn btn-primary" type="submit" name="update" value="Update"></th>
      <td></td></tr>
   </div>
   </table>
   
</form>

<a href="view_account.php"> Show Data</a>
