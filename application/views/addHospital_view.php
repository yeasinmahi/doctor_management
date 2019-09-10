<div class="span9">
  <!--<div class="content">-->
  <h2>Current Hospital</h2>
  <div class="form-group">
    <?php 
       	echo '<label for="usr">Hospital Name:  <strong> '.$currentHospital.'</strong></label>';
                            
    ?>
                       
  </div>
  <h2>Update Hospital</h2>
  <div class="form-group">
    <?php 
       	echo form_open('doctor_controller/addHospital_view');
       	echo '<label for="usr">Hospital Name:  '.$hospital.'</label>';
                            
    ?>
                       
  </div>
                            
  <div class="form-group">
      <?php echo '<button type="submit" name="addHospital" class="btn btn-primary">Update</button>';
      	echo form_close();
      ?> 
  </div>                           
</div>
