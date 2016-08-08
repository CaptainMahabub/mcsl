<!-- New Deposite -->

<form class = "form-inline" role = "form" name="account_form" method="post" action="submit_deposite.php" enctype="multipart/form-data">

<div class = "form-group">
      <label class = "sr-only" for = "account_no">Account No</label>
      <input type = "text" name="account_no" class = "form-control" id = "account_no" placeholder = "Account No">
   </div>

<div class = "form-group">

<label class = "sr-only" for = "deposit_withdraw">deposite or withdraw</label>
     
      <select name="deposit_withdraw" class = "form-control" id = "deposit_withdraw">
         <option value="">Select Type</option>
         <option value="deposite">deposite</option>
         <option value="withdraw">withdraw</option>

      </select>
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
         