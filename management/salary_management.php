<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Salary Management</span>&nbsp; &nbsp;<span class="label label-important"> * </span></a>
							<ul>
								<li><a class="submenu" data-toggle = "modal" data-target = "#newSalary"><i class="icon-file-alt"></i><span class="hidden-tablet"> Employee Salary</span></a></li>
								<li><a class="submenu" href="view_employee_salary.php"><i class="icon-file-alt"></i><span class="hidden-tablet">View Employee salary</span></a></li>
								
							</ul>	
                            
                            
                            

<!-- New Account -->
<div class = "modal fade" id = "newSalary" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
                Employee Salary
            </h4>
         </div>
         
         <div class = "modal-body">
            <form role = "form" name="salary_form" method="post" action="submit_salary.php" enctype="multipart/form-data">
			
 	  <?php include("db_config.php");
			$query=$mysqli->query("SELECT employee_id, employee_name FROM employees");?>  

   <div class = "form-group">
      <label>Name</label>
      <select name = "name">
	  <option value="">Select Employee</option>
<?php while($data=$query->fetch_array()){?>
	  <option value="<?php echo $data['employee_id'];?>"><?php echo $data['employee_name'];?></option>
			<?php }?>
	  </select>
   </div>
   <div class = "form-group">
      <label for = "month">Month</label>
      <select name="month">
  <option value="january">January</option>
  <option value="February">February</option>
  <option value="March">March</option>
  <option value="March">April</option>
  <option value="March">May</option>
  <option value="March">June</option>
  <option value="March">July</option>
  <option value="March">August</option>
  <option value="March">September</option>
  <option value="March">October</option>
  <option value="March">November</option>
  <option value="March">December</option>
</select>
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "year">Year</label>
      <select name="year">
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
    <option value="2016">2016</option>
</select>
   </div>
   <div class = "form-group">
      <label class = "sr-only" for = "salary">Salary</label>
      <input type = "number" name="salary" class = "form-control" >
   </div>
   
   <div class = "form-group">
      <label class = "sr-only" for = "salarypaydate">Salary Pay Date</label>
      <input type = "date" name="salarypaydate" class = "form-control">
   </div><br>
   
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
   $(function () { $('#newSalary').modal({
      keyboard: true
   })});
</script>