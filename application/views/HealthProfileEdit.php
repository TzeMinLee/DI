<form class="form-horizontal well" action="" method="post" enctype="multipart/form-data">

<div class="container" style="margin-top: 4rem">
    <br>

  <h2><center>Medical Checkup</h2>
    <br>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-5" for="BPressure">Blood Pressure</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="BPressure" name="BPressure" value="<?php echo $results[0]->ofh_health_blood_systolic; ?> / <?php echo $results[0]->ofh_health_blood_diastolic; ?>" required>mmHg 
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="sugar">Sugar</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="sugar"  name="sugar" value="<?php echo $results[0]->ofh_health_sugar; ?>" required>mmol/L 
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="weight">Weight</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="weight" name="weight" value="<?php echo $results[0]->ofh_health_weight; ?>" required>kg 
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="height">Height</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="height" name="height"  value="<?php echo $results[0]->ofh_health_height; ?>" required>cm 
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="date">Date</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="date" name="date" value="<?php echo $results[0]->ofh_health_mc_date; ?>" required>
         
      </div>
    </div>
    <br>

    <h2><center>Medicines</h2>
      <br>
    <div class="form-group">
      <label class="control-label col-sm-7" for="md1">Medicine 1</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="md1"  name="md1" value="<?php echo $results[0]->ofh_health_medicine_1; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-7" for="md2">Medicine 2</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="md2" name="md2" value="<?php echo $results[0]->ofh_health_medicine_2; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-7" for="md3">Medicine 3</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="md3" name="md3" value="<?php echo $results[0]->ofh_health_medicine_3; ?>">
      </div>
    </div>
   


    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <input type="hidden" name="form-submitted" value="edit" />
          <button type="cancel" class="btn btn-primary">CANCEL</button>
          <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
      </div>

      
    </div>
  </form>
</div>

