<div class="container" style="margin-top: 4rem">
    <br>

  <h2><center>Medical Checkup</h2>
    <br>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-5" for="BPressure">Blood Pressure</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="BPressure" name="BPressure" value="<?php echo $results[0]->ofh_health_blood_systolic; ?> / <?php echo $results[0]->ofh_health_blood_diastolic; ?>"mmHg disabled>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="sugar">Sugar</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="sugar"  name="sugar" value="<?php echo $results[0]->ofh_health_sugar; ?>"mmol/L disabled > 
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="weight">Weight</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="weight" name="weight" value="<?php echo $results[0]->ofh_health_weight; ?>"kg disabled>
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="height">Height</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="height" name="height"  value="<?php echo $results[0]->ofh_health_height; ?>"cm disabled>
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="date">Date</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="date" name="date" value="<?php echo $results[0]->ofh_health_mc_date; ?>" disabled>
         
      </div>
    </div>
    <br>

    <h2><center>Medicines</h2>
      <br>
    <div class="form-group">
      <label class="control-label col-sm-7" for="md1">Medicine 1</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="md1"  name="md1" value="<?php echo $results[0]->ofh_health_medicine_1; ?>" disabled>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-7" for="md2">Medicine 2</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="md2" name="md2" value="<?php echo $results[0]->ofh_health_medicine_2; ?>" disabled>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-7" for="md3">Medicine 3</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="md3" name="md3" value="<?php echo $results[0]->ofh_health_medicine_3; ?>" disabled>
      </div>
    </div>
   


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
         <a href ="<?php echo base_url(); ?>HealthProfile/HealthProfileEdit" class="btn btn-primary btn-md" role="button">EDIT</a>

      </div>
      

      
    </div>
  </form>
</div>

