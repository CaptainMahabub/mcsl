<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Employee Management</span>&nbsp; &nbsp;<span class="label label-important"> * </span></a>
							<ul>
								<li><a class="submenu" data-toggle = "modal" data-target = "#newEmployee"><i class="icon-file-alt"></i><span class="hidden-tablet"> New Employee</span></a></li>
								<li><a class="submenu" href="view_employee.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Employee</span></a></li>
								
							</ul>	
                            
                            
                            

<!-- New Account -->
<div class = "modal fade" id = "newEmployee" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               Add New Employee
            </h4>
         </div>
         
         <div class = "modal-body">
            <form class = "form-inline" role = "form" name="employee_form" method="post" action="submit_employee.php" enctype="multipart/form-data">
			
   
  <div class = "form-group">
      <label class = "sr-only" for = "name"></label>
      <input type = "hidden" name="id" class = "form-control" id = "name" placeholder = "Enter Name">
   </div> 
   <div class = "form-group">
      <label class = "sr-only" for = "name">Name</label>
      <input type = "text" name="name" class = "form-control" id = "name" placeholder="Enter Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Father's Name</label>
      <input type = "text" name="fathersname" class = "form-control" id = "name" placeholder="Enter Father Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Mother's Name</label>
      <input type = "text" name="mothersname" class = "form-control" id = "name" placeholder = "Enter Mother Name">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Birth Date</label>
      <input type = "date" name="birthdate" class = "form-control" id = "name" >
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Gender</label>
      <input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Mobile No</label>
      <input type = "number" name="mobile" class = "form-control" id = "name" >
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">E-mail</label>
      <input type = "text" name="email" class = "form-control" id = "name" placeholder = "Enter Email address">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">NID Number</label>
      <input type = "number" name="nid" class = "form-control" id = "name" >
   </div>
   
  
   <div class = "form-group">
      <label class = "sr-only" for = "name">Address</label>
      <input type = "text" name="address" class = "form-control" id = "name" placeholder = "Enter Your Address">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Joining Date</label>
      <input type = "date" name="joiningdate" class = "form-control" id = "name" >
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Designation</label>
      <input type = "text" name="designation" class = "form-control" id = "name" placeholder = "Enter Designation">
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "name">Salary</label>
      <input type = "number" name="salary" class = "form-control" id = "name" >
   </div>
   
   <div class = "form-group">
      <label class = "sr-only" for = "inputfile">File input</label>
      <input type = "file" name="photo" id = "inputfile">
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
   $(function () { $('#newAccount').modal({
      keyboard: true
   })});
</script>