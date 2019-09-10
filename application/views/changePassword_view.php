<div class="span9">
  <!--<div class="content">-->
  <h2>Change Password</h2>
  <div class="form-group">
  <table>

    <?php 
       	
       	echo form_open('doctor_controller/changePassword');
       	echo '<label style="color:red">'.validation_errors().'</label>';
       	echo '<label style="color:'.$color.'">'.$error.'</label>';
       	echo '<tr><td><label for="usr">Current Password:  </label></td>';
       	echo '<td><input class="input-medium" type="password" name="currentPassword"/></td></tr>';
       	echo '<tr><td><label for="usr">New Password:  </label></td>';
       	echo '<td><input class="input-medium" type="password" name="password"/></td></tr>';
       	echo '<tr><td><label for="usr">Confirm Password:  </label></td>';
       	echo '<td><input class="input-medium" type="password" name="rPassword"/></tr></td>';
                            
    ?>             
  </div>
                            
  <div class="form-group">
      <?php echo '<tr><td><button type="submit" name="changePassword" class="btn btn-primary">Change</button>';
      	echo form_close();
      ?> 
  </div>  
  </table>                         
</div>
