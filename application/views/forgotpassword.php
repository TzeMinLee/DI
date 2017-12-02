<!-- button link to Homepage -->
<button type="button" class="btn btn-link" onclick="location.href='<?php echo base_url(); ?>';">Back to Home</button>
<!-- image logo darulInsyirah -->
<center>
 <div class=" col-sm-4" >
<img src="<?php echo base_url(); ?>images/DarulInsyirah.jpg" alt="logo DarulInsyirah"  width="150"  class="img-responsive center-block" >
</div>
<br> 
</center>
<!-- form for forgot password -->
<div class="col-md-4 center ">
<form class="form-horizontal" action="<?php echo base_url();?>Authentication/send_mail" method="post" name="resetPassword"  role="form" id="resetPassword" onsubmit ='return validate()'>
<!-- card for forgotpassword -->
<div class="card bg-danger text-white">
<center><h3>Forgot Password</h3> </center>  
<br>
<div class="form-group">
<label class="control-label col-md-4" for="email">Email<em>*</em></label>
<div class="col-md-9">
<input class="form-control"  type="email" name="email" id="email" placeholder="Please insert your email"  class="form-control" required autofocus>
</div>
</div>
<!-- button reset & button submit -->
<div class="form-group">
<div class="col-md-offset-3 col-md-9">
<button class="btn" type="reset" name="reset"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Reset</button>                
<button class="btn" type="submit" name="submit"><span  class="glyphicon glyphicon-ok" aria-hidden="true"></span> Submit</button>

</div>
</div>
</div>
 </div>
   </div>
   </form>
     </div>



<style >
  body {
  padding-top: 20px;
}
.spacer {
  margin-top: 2%;
  margin-bottom: 2%;
}      
.block {
  height: 300px;
  padding-top: 15px;  
  background-color: darkorange;
}  
.block2 {
  min-height: 160px;
  padding-top: 15px; 
} 
.center {
  position: absolute;
/*  top: 0;
  bottom: 0; */
  left: 0;
  right: 0;
  margin: auto;  
}
</style>





