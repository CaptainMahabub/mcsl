<form class = "form-inline" role = "form" name="account_form" method="post" action="submit_account.php" enctype="multipart/form-data">
   
   <div class = "form-group">
      <label for = "id"></label>
      <input type = "hidden" name="id" class = "form-control" id = "id">
   </div>
   <div class = "form-group">
      <label for = "name">Name:</label>
      <input type = "text" name="name" class = "form-control" id = "name" placeholder="Enter Name">
   </div>
   <div class = "form-group">
      <label for = "fathersname">Father's Name</label>
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
      <select name="accountType" class = "form-control" id = "accountType">
         <option value="">Select Account Type</option>
         <option value="savings">Savings</option>
         <option value="fixed">Fixed</option>

      </select>
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "primaryDeposite">Primary Deposit</label>
      <input type = "text" name="primaryDeposite" class = "form-control" id = "primaryDeposite" placeholder = "Primary Deposit">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "address">Address</label>
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