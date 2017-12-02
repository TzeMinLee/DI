
<!-- link to homepage -->
<button type="button" class="btn btn-link" onclick="location.href='<?php echo base_url(); ?>index.php/authentication/login';">Back to Home</button>
<br>
<!--  error message -->
<?php   if ($display == 3){  ?>
 <div class="container">
 	  <div class="card bg-danger text-white">
        <div class="card-body"><strong >Error!</strong>  Error in sending mail.</div>
	  </div>
 </div>
<?php   } ?>
<!-- css style -->
<style >
  body {
  padding-top: 20px;
}
</style>