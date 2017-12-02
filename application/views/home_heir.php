<div class="container" style="margin-top: 4rem">
	<div class="row">
		<div class="col-md-8">
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
			</ul>
		</div>
		<div class="col-md-4">
			<table class="table table-hover">
				<thead class="thead-dark">
					<tr>
						<th>Reminders</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							Please restock medicine <i class="fa fa-exclamation blink" aria-hidden="true" style="color: red;"></i>
						</td>
					</tr>
					<tr>
						<td>
							Medical checkup
						</td>
					</tr>
				</tbody>
			</table>
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

.day
{
	width: 20%;
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