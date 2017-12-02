<div class="container" style="margin-top: 4rem">
	<div class="row">
		<div class="col-md-5">
			<h1 id="greeting"></h1>
			<ul class="main">
			  	<?php 
			  		foreach ($results as $activity)
			  		{
			  	?>
						<li class="day">
						    <h3>
						    	<?php 
						    		if ($activity->ofh_activity_day == 1)
						    		{
						    			echo "Monday";
						    		}
						    		else if ($activity->ofh_activity_day == 2)
						    		{
						    			echo "Tuesday";
						    		}
						    		else if ($activity->ofh_activity_day == 3)
						    		{
						    			echo "Wednesday";
						    		}
						    		else if ($activity->ofh_activity_day == 4)
						    		{
						    			echo "Thursday";
						    		}
						    		else if ($activity->ofh_activity_day == 5)
						    		{
						    			echo "Friday";
						    		}
						    	?>
						    </h3>
							<span>
								<div class="btn-group btn-group-xs float-md-right">
							    	<button class="btn btn-sm" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-square-o fa-1"></i></button>
							    	<button class="btn btn-sm" type="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="location.href='<?php echo base_url(); ?>Dailyactivities/Delete?id=<?php echo $activity->ofh_activity_id; ?>'"><i class="fa fa-trash-o fa-1"></i></button>
							    </div>
							</span>
					  	</li>
					  	<li class="events">
						    <ul>
						      	<li>
						          	<span class="event-time"><?php echo $activity->ofh_activity_time; ?> - </span>
						          	<span><?php echo $activity->ofh_activity_name; ?></span>
						          	<br>
						          	<span class="event-location"><?php echo $activity->ofh_activity_location;	 ?></span>
						      	</li>	
						    </ul>
						</li>
			  	<?php 
			  		}
			  	 ?>
			  	<button class="btn" type="button" data-toggle="tooltip" data-placement="top" title="Add activity"><i class="fa fa-plus"></i> Add</button>
			</ul>
		</div>
		<div class="col-md-7">
			<table class="table table-hover">
				<h3>Schedule</h3>
				<thead class="thead-light">
					<tr>
						<th>Time</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th>Saturday</th>
						<th>Sunday</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="time">9:00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="time">10:00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="time">11:00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="time">12:00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="time">13:00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="time">14:00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="time">15:00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="time">16:00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="time">17:00</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="addstaff">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					Add activity
				</h4>
			</div>
		</div>
	</div>
</div>
<style>
.blink
{
	animation: blink 1s steps(5, start) infinite;
	-webkit-animation: blink 1s steps(5, start) infinite;
}
@keyframes blink
{
	to
	{
		visibility: hidden;
	}
}
@-webkit-keyframes blink
{
	to
	{
		visibility: hidden;
	}
}
ul.main
{ 
  	list-style: none;
  	max-width: 100%;
  	margin: 2rem auto;
}
h3
{
	padding: 0; margin: 0;
}
li
{
	list-style: none;
}
.date
{
  	float: left;
}
.events
{
	width: 80%;
  	float: left;
  	border-left: 1px solid #ccc;
  	margin-left: 1rem;
  	margin-bottom: 2rem;
}
.event-time
{
  	font-weight: 600;
}
.event-location
{
    font-size: .8em;
    color: tomato;
    margin-left: 70px;
}
.time
{
	font-weight: 450;
}
</style>
<script>
	var now =  new Date();
	var hour = now.getHours();

	var greet = "";

	if (hour > 17)
	{
		greet = "Good Evening";
	}
	else if (hour > 12)
	{
		greet = "Good Afternoon";
	}
	else if (hour > 0)
	{
		greet = "Good Morning";
	}

	document.getElementById("greeting").innerHTML = greet;
</script>
<script>
	$(document).ready(function()
	{
	    $('[data-toggle="tooltip"]').tooltip();   
	});
</script>