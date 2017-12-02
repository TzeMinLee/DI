
<!-- link to homepage -->
<button type="button" class="btn btn-link" onclick="location.href='<?php echo base_url(); ?>index.php/authentication/login';">Back to Home</button>
<br>
<!--  success message -->
<?php   if ($display == 3){  ?>
<div class="container">
	<div class="card bg-success text-white">
      <div class="card-body"><strong >Success!</strong> Email sent successfully.</div>
    </div>
</div>
<?php   } ?>
<!-- css style -->
<style >
  body {
  padding-top: 20px;
}

</style>



