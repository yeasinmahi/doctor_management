<div class="span9">
  <!--<div class="content">-->
  <h2>Change Name</h2>
  <div class="form-group">
    <?php 
       	echo '<label for="usr">Current Name:  <strong> '.$name.'</strong></label>';
       	echo form_open('doctor_controller/changeName_view');
       	echo '<label for="usr">First Name:  </label>';
       	echo '<input class="input-medium" type="text" name="fname"/>';
       	echo '<label for="usr">Last Name:  </label>';
       	echo '<input class="input-medium" type="text" name="lname"/>';
                            
    ?>             
  </div>
                            
  <div class="form-group">
      <?php echo '<button type="submit" name="UpdateName" class="btn btn-primary">Update</button>';
      	echo form_close();
      ?> 
  </div>                           
</div>
