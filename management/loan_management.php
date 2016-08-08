<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Loan Management</span>&nbsp;<span class="label label-important"> * </span></a>
							<ul>
								<li><a class="submenu" data-toggle = "modal" data-target = "#newLoan"><i class="icon-file-alt"></i><span class="hidden-tablet"> New Loan </span></a></li>
								<li><a class="submenu" href="view_loan.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Loan Manage</span></a></li>
									<li><a class="submenu" href="view_installment.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Installment Calculation</span></a></li>
								<li><a class="submenu"  href="loan_deposite.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Loan Deposite</span></a></li>
								<li><a class="submenu"  href="view_loan_deposit.php"><i class="icon-file-alt"></i><span class="hidden-tablet">View Deposite</span></a></li>
								<li><a class="submenu"  href="loan_statement.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Loan Statement</span></a></li>
							</ul>	
                            
                            
                            

<!-- New Account -->
<div class = "modal fade" id = "newLoan" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Loan Form
            </h4>
         </div>
         
         <div class = "modal-body">
            <form role = "form" name="loan_form" method="post" action="submit_loan.php">
			 
   <div class = "form-group">
      <label class = "sr-only" for = "accountno">Account No</label>
      <input type = "text" name="accountno" class = "form-control" id = "accountno" placeholder = "Enter Account No">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "date">Date</label>
       <input type = "date" name="date" class = "form-control" id = "date">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "loanamount">Loan Amount</label>
      <input type = "number" name="loanamount" class = "form-control" id = "loanamount">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "installment">Installment</label>
      <select name="installment" class = "form-control" id = "installment">
      <option value="">Select Installment</option>
      <option value="12">1 Year</option> 
      <option value="24">2 Years</option> 
      <option value="36">3 Years</option>  
      </select>
   </div>
   
   <div class = "form-group">
      <label class = "sr-only" for = "grantors">Grantors</label>
      <input type = "text" name="grantors" class = "form-control" id = "grantors" placeholder = "Enter Grantors">
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

<script>
   $(function () { $('#newLoan').modal({
      keyboard: true
   })});
</script>