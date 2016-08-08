<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Account Management</span>&nbsp; &nbsp;<span class="label label-important"> * </span></a>
							<ul>
								<li><a class="submenu" href="new_account.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> New Account</span></a></li>
                                
								<li><a class="submenu" href="view_account.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Account</span></a></li>
								
							<li><a class="submenu" data-toggle = "modal" data-target = "#newDeposite"><i class="icon-file-alt"></i><span class="hidden-tablet">Deposite / Withdraw</span></a></li>
                                
                                 <li><a class="submenu" href="view_deposite.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Deposite</span></a></li>
                                 
                                 <li><a class="submenu" data-toggle = "modal" data-target = "#newWithdraw"><i class="icon-file-alt"></i><span class="hidden-tablet">New Withdraw</span></a></li>
                                
                                 <li><a class="submenu" href="view_withdraw.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Withdraw</span></a></li>
                                 
                                 
                            <li><a class="submenu" href="account_statement.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Statement</span></a></li>
                                
                                
								<!--<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Deposite</span></a></li>-->
                                <!--<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Statement</span></a></li>-->
							</ul>	
                            
                            
                            



<!-- New Deposite -->
<div class = "modal fade" id = "newDeposite" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Add Deposite
            </h4>
         </div>
         
         <div class = "modal-body">
<form class = "form-inline" role = "form" name="account_form" method="post" action="submit_deposite.php" enctype="multipart/form-data">
   
   <div class = "form-group">
      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id">
   </div>
   
   
   <div class = "form-group">
      <label class = "sr-only" for = "name">Account No</label>
      <input type = "text" name="account_no" class = "form-control" id = "account_no" placeholder = "Account No">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Date</label>
      <input type = "date" name="date" class = "form-control" id = "date" placeholder = "Date">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Tracking Number</label>
      <input type = "text" name="tracking_no" class = "form-control" id = "tracking_no" placeholder = "Tracking Number">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Ammount</label>
      <input type="text" name="ammount" class = "form-control" id = "ammount" placeholder = "Ammount">
   </div>
   
   <div class = "form-group">
      <input class="btn btn-primary" type="submit" name="" value="Submit">
   </div>
   
</form>
         </div>
         
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
            
            
         </div>
         
      </div>
   </div>
   
</div> <!--/.modal -->




<!-- New Withdraw -->
<div class = "modal fade" id = "newWithdraw" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Add Withdraw
            </h4>
         </div>
         
         <div class = "modal-body">
<form class = "form-inline" role = "form" name="account_form" method="post" action="submit_withdraw.php" enctype="multipart/form-data">
   
   <div class = "form-group">
      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id">
   </div>
   
   
   <div class = "form-group">
      <label class = "sr-only" for = "name">Account No</label>
      <input type = "text" name="account_no" class = "form-control" id = "account_no" placeholder = "Account No">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Date</label>
      <input type = "date" name="date" class = "form-control" id = "date" placeholder = "Date">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Check Number</label>
      <input type = "text" name="check_no" class = "form-control" id = "check_no" placeholder = "Check Number">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Ammount</label>
      <input type="text" name="ammount" class = "form-control" id = "ammount" placeholder = "Ammount">
   </div>
   
   <div class = "form-group">
      <input class="btn btn-primary" type="submit" name="" value="Submit">
   </div>
   
</form>
         </div>
         
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
            
            
         </div>
         
      </div>
   </div>
   
</div> <!--/.modal -->


<!--comments-->


<script>
   $(function () { $('#newAccount').modal({
      keyboard: true
   })});
</script>



<script>
   $(function () { $('#newDeposite').modal({
      keyboard: true
   })});
</script>



<script>
   $(function () { $('#newWithdraw').modal({
      keyboard: true
   })});
</script>





