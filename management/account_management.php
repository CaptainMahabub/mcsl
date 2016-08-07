<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Account Management</span>&nbsp; &nbsp;<span class="label label-important"> 4 </span></a>
							<ul>
								<li><a class="submenu" data-toggle = "modal" data-target = "#newAccount"><i class="icon-file-alt"></i><span class="hidden-tablet"> New Account</span></a></li>
                                
								<li><a class="submenu" href="view_account.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Account</span></a></li>
								
							<li><a class="submenu" data-toggle = "modal" data-target = "#newDeposite"><i class="icon-file-alt"></i><span class="hidden-tablet">New Deposite</span></a></li>
                                
                                 <li><a class="submenu" href="view_deposite.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Deposite</span></a></li>
                                 
                                 <li><a class="submenu" data-toggle = "modal" data-target = "#newWithdraw"><i class="icon-file-alt"></i><span class="hidden-tablet">New Withdraw</span></a></li>
                                
                                 <li><a class="submenu" href="view_withdraw.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Withdraw</span></a></li>
                                 
                                 
                            <li><a class="submenu" data-toggle = "modal" data-target = "#statement"><i class="icon-file-alt"></i><span class="hidden-tablet">Statement</span></a></li>
                                
                                
								<!--<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Deposite</span></a></li>-->
                                <!--<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Statement</span></a></li>-->
							</ul>	
                            
                            
                            

<!-- New Account -->
<div class = "modal fade" id = "newAccount" tabindex = "1" role = "dialog" 
   aria-labelledby = "myModalLabel1" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Add New Account Holder
            </h4>
         </div>
         
         <div class = "modal-body">
<form class = "form-inline" role = "form" name="account_form" method="post" action="submit_account.php" enctype="multipart/form-data">
   
   <div class = "form-group">
      <label class = "sr-only" for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Name:</label>
      <input type = "text" name="name" class = "form-control" id = "name" placeholder="Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "fathersname">Father's Name</label>
      <input type = "text" name="fathersname" class = "form-control" id = "fathersname" placeholder = "Father's Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "mothersname">Mother's Name</label>
      <input type = "text" name="mothersname" class = "form-control" id = "mothersname" placeholder = "Mother's Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "birthdate">Birth Date</label>
      <input type="date" name="birthdate" class = "form-control" id = "birthdate" placeholder = "Birth Date">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "gender">Gender</label>
      <input type="radio" name="gender" value="female">Female       
      <input type="radio" name="gender" value="male">Male
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "mobile">Mobile No</label>
      <input type="text" name="mobile" class = "form-control" id = "mobile" placeholder = "Mobile No">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "email">E-mail</label>
      <input type="email" name="email" class = "form-control" id = "email" placeholder = "E-mail">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "nid">NID Number</label>
      <input type"number" name="nid" class = "form-control" id = "nid" placeholder = "NID Number">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "accountType">Account Type</label>
      <input type = "text" name="accountType" class = "form-control" id = "accountType" placeholder = "Account Type">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "primaryDeposite">Primary Deposit</label>
      <input type = "text" name="primaryDeposite" class = "form-control" id = "primaryDeposite" placeholder = "Primary Deposit">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "address">Address</label>
      <!--<input type = "text" name="address" class = "form-control" id = "name" placeholder = "Address">-->
      <textarea name="address" class = "form-control" id = "address" placeholder="Enter Address"></textarea>
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "brunch">Brunch</label>
      <input type = "text" name="brunch" class = "form-control" id = "brunch" placeholder = "Brunch">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "verifier">Verifier</label>
      <input type = "text" name="verifier" class = "form-control" id = "verifier" placeholder = "Verifier">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "nominee">Nominee</label>
      <input type = "text" name="nominee" class = "form-control" id = "nominee" placeholder = "Nominee">
   </div>
   
   <div class = "form-group">
      <label class = "sr-only" for = "photo">File input</label>
      <input type = "file" name="photo" id = "photo">
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
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
   
</div><!-- /.modal -->



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





