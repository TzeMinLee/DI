 <?php $value=$this->session->userdata('userid'); ?>
   
 
    <div class="container">
    
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-3">
      <div class="page-header">
        <h2>My Profile</h2>
        </div>
    <form class="form-horizontal">

      
      <br>
      <?php if ($results[0]->ofh_user_pic == "" ) { ?>
      <img src="<?php echo base_url(); ?>users/nophoto.png" class="img-responsive" width="30%" height="35%" margin="auto">
    <?php } else { ?>
      <img src="<?php echo base_url(); ?>users/<?php echo $results[0]->ofh_user_pic ?>" class="img-responsive"  width="30%" height="35%" margin="auto"><br>
    <?php } ?> 

          
          <h4>Account Information</h4>
          
 
          <br>
          <!-- staffid -->
          <div class="form-group">
            <label for="uid" class="col-sm-3 control-label">Staff ID</label>
            <div class="col-sm-9">
              <input id="uid" class="form-control" name="uid" type="text" size="20" value="<?php echo $results[0]->ofh_user_id; ?>" disabled>
            </div>
          </div>

          <!-- stafffname -->
          <div class="form-group">
            <label for="uname" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
              <input id="uname" class="form-control" name="uname" type="text" value="<?php echo $results[0]->ofh_user_name; ?>" disabled>
            </div>
          </div>

           <!-- staffpass -->
          <div class="form-group">
            <label for="upass" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
              <input id="upass" class="form-control" name="upass" type="password" value="<?php echo $results[0]->ofh_user_password; ?>" placeholder="Enter password" disabled>
            </div>
          </div>

          <br><br>
          <h4>Personal Information</h4>
          <br>
          <!-- staffemail -->
          <div class="form-group">
            <label for="uic" class="col-sm-3 control-label">IC Number</label>
            <div class="col-sm-9">
              <input id="uic" class="form-control" name="uic" type="text" value="<?php echo $results[0]->ofh_user_ic; ?>" placeholder="No data" disabled>
            </div>
          </div>

          <!-- staffphone -->
          <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone Number</label>
            <div class="col-sm-9">
              <input id="phone" class="form-control" name="phone" type="text" value="<?php echo $results[0]->ofh_user_number; ?>" placeholder="No data" disabled>
            </div>
          </div>

          <!-- staffdob -->
          <div class="form-group">
            <label for="uage" class="col-sm-3 control-label">Age</label>
            <div class="col-sm-9">
              <input id="uage" class="form-control" name="uage" type="text" value="<?php echo $results[0]->ofh_user_age; ?>" placeholder="No data" disabled>
            </div>
          </div>

          <!-- staffgender -->
          <div class="form-group">
            <label for="staffgender" class="col-sm-3 control-label">Gender</label>
            <div class="col-sm-9">
              <div class="radio" >
                <label>
                  <input name="gender" type="radio" value="Male" "<?php echo $results[0]->ofh_user_gender; ?>" disabled> Male
                </label>
                <label>
                  <input name="gender" type="radio" value="Female" "<?php echo $results[0]->ofh_user_gender; ?>" disabled>Female </td>
                </label>
              </div>
            </div>
          </div>

                    <!-- staffrace -->
          <div class="form-group">
            <label for="position" class="col-sm-3 control-label" >Position</label>
            <div class="col-sm-9">
              <input id="position" class="form-control" name="position" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['staff_position']; ?>" placeholder="No data" disabled>
            </div>
          </div>

          <!-- staffadress -->
          <div class="form-group">
            <label for="staffaddress" class="col-sm-3 control-label">Address</label>
            <div class="col-sm-9">
              <input id="staffadress" class="form-control" name="uadd" type="text" placeholder="No data" value="<?php echo $results[0]->ofh_user_address; ?>" disabled><br><br>
            </div>
          </div>
         
          
          
       
             
      </div>
      </label>
      </div>
      </div>
      </div>
      </form>
      </div>
      </div>
      </div>
      