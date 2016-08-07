<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Loan Management</span>&nbsp; &nbsp;<span class="label label-important"> * </span></a>
							<ul>
								<li><a class="submenu" data-toggle = "modal" data-target = "#newLoan"><i class="icon-file-alt"></i><span class="hidden-tablet"> Loan </span></a></li>
								<li><a class="submenu" href="view_loan.php"><i class="icon-file-alt"></i><span class="hidden-tablet">View Loan</span></a></li>
	<li><a class="submenu"  href="installment.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Installment</span></a></li>
								<li><a class="submenu" href="view_installment.php"><i class="icon-file-alt"></i><span class="hidden-tablet">View Installment</span></a></li>
								<li><a class="submenu"  href="loan_deposite.php"><i class="icon-file-alt"></i><span class="hidden-tablet">Deposite</span></a></li>
								<li><a class="submenu"  href="view_loan_deposit.php"><i class="icon-file-alt"></i><span class="hidden-tablet">View Deposite</span></a></li>
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
            <form class = "form-inline" role = "form" name="loan_form" method="post" action="submit_loan.php" enctype="multipart/form-data">
			
   
  <div class = "form-group">
      <label class = "sr-only" for = "name"></label>
      <input type = "hidden" name="id" class = "form-control" id = "name" placeholder = "Enter Name">
   </div> 
   <div class = "form-group">
      <label class = "sr-only" for = "name">Account No</label>
      <input type = "text" name="accountno" class = "form-control" id = "name" placeholder = "Enter Account No">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Date</label>
       <input type = "date" name="date" class = "form-control" id = "name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Loan Amount</label>
      <input type = "number" name="loanamount" class = "form-control" id = "name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Installment</label>
      <input type = "number" name="installment" class = "form-control" id = "name">
   </div>
   
   <div class = "form-group">
      <label class = "sr-only" for = "name">Grantors</label>
      <input type = "text" name="grantors" class = "form-control" id = "name" placeholder = "Enter Grantors">
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