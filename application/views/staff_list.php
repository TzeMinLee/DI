<?php $this->session->set_userdata('userid','VALUE'); ?>


<div class="container" style="margin-top: 4rem">	
	<div class="row">
		<div class="container">
			<div class="page-header">
				<br><br><h2>Staff List</h2>
			</div><br>
			<!-- <div class="container-fluid"> -->
			<div class="row">
				<?php foreach($result as $readrow) { ?>

				<div class="col-sm-3 col-lg-3 col-md-3">
					<div class="card" >
						<?php if ($readrow['ofh_user_pic'] == "" ) { ?>
						<img class="card-img-top" src="<?php echo base_url(); ?>users/nophoto.png" margin="auto">
						<?php } else { ?>
						<img class="card-img-top" src="<?php echo base_url(); ?>users/<?php echo $readrow['ofh_user_pic'] ?>" margin="auto">
						<?php } ?>

						<div class="card-body">
							<h3 class="card-title"><?php echo $readrow['ofh_user_name']; ?></h3>
							<p class="card-text" style="height: 50px;">
								<strong>Name : </strong><?php echo $readrow['ofh_user_name']; ?><br>
								<strong>ID : </strong><?php echo $readrow['ofh_user_id']; ?></p>

								<?php $this->load->helper('url'); ?>
								<a href="<?php echo base_url(); ?>Staff/view?userid=<?php echo $readrow['ofh_user_id']; ?>" class="btn btn-primary  btn-block" role="button">Profile</a>

						</div>
					</div>
					<!-- /.thumbnail -->
					<br>
				</div>

				<?php } ?>
			</div>
		</div>
	</div>
</div>