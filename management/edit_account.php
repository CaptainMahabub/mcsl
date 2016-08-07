<?php
require('db_config.php');
?>


<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Account Management</span>&nbsp; &nbsp;<span class="label label-important"> 4 </span></a>
							<ul>
								<li><a class="submenu" data-toggle = "modal" data-target = "#editAccount"><i class="icon-file-alt"></i><span class="hidden-tablet"> Edit Account</span></a></li>
                                
                                
								<!--<li><a class="submenu" href="view_account.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Account</span></a></li>-->
                               
							</ul>	
                            
                            
                            
<?php
$id = $_GET['id'];
$row = $mysqli->query("SELECT * FROM account_holders WHERE account_holder_id = '$id'");
$data = $row->fetch_array();

?>

<!-- Edit Account -->
<div class = "modal fade" id = "editAccount" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Edit Account 
            </h4>
         </div>
         
         <div class = "modal-body">
<form class = "form-inline" role = "form" name="account_form" method="post" action="update_account.php">
   
   <div class = "form-group">
      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id" value = "<?php echo $id;?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Name</label>
      <input type = "text" name="name" class = "form-control" id = "name" placeholder = "Name" value="<?php echo $data['account_holder_name'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Father's Name</label>
      <input type = "text" name="fathersname" class = "form-control" id = "name" placeholder = "Father's Name" value="<?php echo $data['account_holder_fathersname'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Mother's Name</label>
      <input type = "text" name="mothersname" class = "form-control" id = "name" placeholder = "Mother's Name" value="<?php echo $data['account_holder_mothersname'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Birth Date</label>
      <input type="date" name="birthdate" class = "form-control" id = "name" placeholder = "Birth Date" value="<?php echo $data['account_holder_birthdate'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Gender</label>
      <!--<input type = "text" name="gender" class = "form-control" id = "name" placeholder = "Gender">-->
      <input type="radio" name="gender" value="female">Female       
      <input type="radio" name="gender" value="male">Male
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Mobile No</label>
      <input type="text" name="mobile" class = "form-control" id = "name" placeholder = "Mobile No" value="<?php echo $data['account_holder_mobile'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">E-mail</label>
      <input type="email" name="email" class = "form-control" id = "name" placeholder = "E-mail" value="<?php echo $data['account_holder_email'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">NID Number</label>
      <input type"number" name="nid" class = "form-control" id = "name" placeholder = "NID Number" value="<?php echo $data['document_number'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Account Type</label>
      <input type = "text" name="accountType" class = "form-control" id = "name" placeholder = "Account Type" value="<?php echo $data['account_type_name'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Primary Deposit</label>
      <input type = "text" name="primaryDeposite" class = "form-control" id = "" value="<?php echo $data['primar_savings_amount'] ?>"></div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Address</label>
      <!--<input type = "text" name="address" class = "form-control" id = "name" placeholder = "Address">-->
      <textarea name="address" class = "form-control" id = "name" placeholder="Enter Address" ><?php echo $data['account_holder_present_address'] ?></textarea>
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Branch</label>
      <input type = "text" name="brunch" class = "form-control" id = "name" placeholder = "Branch" value="<?php echo $data['branch_name'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Verifier</label>
      <input type = "text" name="verifier" class = "form-control" id = "name" placeholder = "Verifier" value="<?php echo $data['verifier_name'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Nominee</label>
      <input type = "text" name="nominee" class = "form-control" id = "name" placeholder = "Nominee" value="<?php echo $data['nominee_name'] ?>">
   </div>
   
   <div class = "form-group">
      <label class = "sr-only" for = "photo">File input</label>
      <input type = "file" name="photo" id = "photo">
   </div>
   <div class = "form-group">
      <input class="btn btn-primary" type="submit" name="update" value="Update">
   </div>
   
</form>
         </div>
         
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
            
            
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
   
</div><!-- /.modal -->



<script>
   $(function () { $('#editAccount').modal({
      keyboard: true
   })});
</script>