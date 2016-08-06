
					

<div class = "modal fade" id = "newInstallment" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Installment Form
            </h4>
         </div>
         
         <div class = "modal-body">
            <form class = "form-inline" role = "form" name="installment_form" method="post" action="submit_installment.php" enctype="multipart/form-data">
			
   
  <div class = "form-group">
      <label class = "sr-only" for = "name"></label>
      <input type = "hidden" name="id" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Account No</label>
      <input type = "text" name="accountno" class = "form-control" id = "name" placeholder = "Enter Account No">
   </div>
   
   <div class = "form-group">
      <label class = "sr-only" for = "name">Name</label>
      <input type = "text" name="name" class = "form-control" id = "name" placeholder = "Enter Name">
   </div>
   
   
   
   <div class = "form-group">
      <label class = "sr-only" for = "name">Start Date</label>
       <input type = "date" name="startdate" class = "form-control" id = "name">
   </div>
   
  <div class = "form-group">
      <label class = "sr-only" for = "name">End Date</label>
       <input type = "date" name="enddate" class = "form-control" id = "name">
   </div>  
   
   
   <div class = "form-group">
      <label class = "sr-only" for = "name">Loan Amount</label>
      <input type = "number" name="loanamount" class = "form-control" id = "name" >
   </div>
   
   <div class = "form-group">
      <label class = "sr-only" for = "name">Payable Amount</label>
      <input type = "number" name="payableamount" class = "form-control" id = "name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Installment Amount</label>
      <input type = "number" name="installmentamount" class = "form-control" id = "name" >
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
   $(function () { $('#newInstallment').modal({
      keyboard: true
   })});
</script>