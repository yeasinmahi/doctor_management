<div class="span9">
  <!--<div class="content">-->
  <h2>Update Contact Info</h2>
  <div class="form-group">
  <table>
    <?php 
       	
       	echo form_open('doctor_controller/updateContact');
       	echo '<tr><td colspan="2"><h3 for="usr">Change Email Address</h3></td></tr>';
       	echo '<tr><td colspan="2"><label style="color:red">'.validation_errors().'</label></tr></td>';
       	echo '<tr><td colspan="2"><label style="color:'.$color.'">'.$error.'</label></tr></td>';
       	echo '<tr><td><label for="usr">Current Email:  </label></td>';
       	echo '<td><strong style="color:blue">'.$email.'</strong></td></tr>';
       	echo '<tr><td><label for="usr">New Email:  </label></td>';
       	echo '<td><input class="input-medium" type="email" name="email" placeholder="Email"/></td></tr>';
       	echo '<tr><td><button type="submit" name="changeEmail" class="btn btn-primary">Change</button>';
       	
       	echo '<tr><td colspan="2"><h3 for="usr">Change Mobile Number</h3></td></tr>';
       	echo '<tr><td colspan="2"><label style="color:red">'.validation_errors().'</label></tr></td>';
       	echo '<tr><td colspan="2"><label style="color:'.$color.'">'.$error.'</label></tr></td>';
       	echo '<tr><td><label for="usr">Current Mobile:  </label></td>';
       	echo '<td><strong style="color:blue">'.$mobile.'</strong></td></tr>';
       	echo '<tr><td><label for="usr">Current Phone:  </label></td>';
       	echo '<td><strong style="color:blue">'.$phone.'</strong></td></tr>';
       	echo '<tr><td><label for="usr">New Mobile:  </label></td>';
       	echo '<td><input class="input-medium" type="text" name="nMobile" placeholder="Mobile"/></td></tr>';
       	echo '<tr><td><label for="usr">New Phone:  </label></td>';
       	echo '<td><input class="input-medium" type="text" name="nPhone" placeholder="Phone"/></tr></td>';
       	echo '<tr><td><button type="submit" name="changeMobile" class="btn btn-primary">Change</button>';
       	echo form_close();
       	
                            
    ?>             
  </div>
                             
  </table>                         
</div>
