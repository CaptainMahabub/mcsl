<?php
require('db_config.php');
?>


<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Account Management</span>&nbsp; &nbsp;<span class="label label-important"> 4 </span></a>
							<ul>
								<li><a class="submenu" data-toggle = "modal" data-target = "#editDeposite"><i class="icon-file-alt"></i><span class="hidden-tablet"> Edit Deposite</span></a></li>
                                
                                
								<!--<li><a class="submenu" href="view_account.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Account</span></a></li>-->
                               
							</ul>	
                            
                            
                            
<?php
$id = $_GET['id'];
$row = $mysqli->query("SELECT * FROM  deposite WHERE id = '$id'");
$data = $row->fetch_array();

?>

<!-- Edit Account -->
<div class = "modal fade" id = "editDeposite" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Edit Deposite 
            </h4>
         </div>
         
         <div class = "modal-body">
<form class = "form-inline" role = "form" name="account_form" method="post" action="update_deposite.php">
   
   <div class = "form-group">
      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id" value = "<?php echo $id;?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Account No</label>
      <input type = "text" name="account_no" class = "form-control" id = "account_no" placeholder = "Name" value="<?php echo $data['account_no'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Date</label>
      <input type = "date" name="date" class = "form-control" id = "date" placeholder = "date" value="<?php echo $data['date'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Tracking no</label>
      <input type = "text" name="tracking_no" class = "form-control" id = "tracking_no" placeholder = "tracking_no" value="<?php echo $data['tracking_no'] ?>">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Ammount</label>
      <input type="text" name="ammount" class = "form-control" id = "ammount" placeholder = "ammount" value="<?php echo $data['ammount'] ?>">
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
   $(function () { $('#editDeposite').modal({
      keyboard: true
   })});
</script>