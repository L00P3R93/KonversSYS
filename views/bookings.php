<fieldset>
<div class="col-md-9">
		<?php 
			if(isset($message)) {echo $message;}
		?>
		<form action="config/queries.php" role = "form" method="post">
			
			<div class="form-group">
				<label for="title">ID/Passport Number:</label>
				<input class="form-control" type="text" name="number" id="number" value="" placeholder="First Name" autocomplete ="off" />
				
			</div>
			<div class="form-group">
				<label for="title">First Name:</label>
				<input class="form-control" type="text" name="first" id="first" value="" placeholder="First Name" autocomplete ="off" />
				
			</div>
			
			<div class="form-group">
				<label for="title">Last Name:</label>
				<input class="form-control" type="text" name="last" id="last" value="" placeholder="Last Name" autocomplete ="off" />
				
			</div>
			
			<div class="form-group">
				<label for="title">Email:</label>
				<input class="form-control" type="text" name="email" id="email" value="" placeholder="Enter Email Address" autocomplete ="off" />
				
			</div>
			<br />		
			<br />		
			<button type="submit" class="btn btn-success" >Save</button>
			<input type="hidden" name="submitted" value="1" />
			
	</div>
</div>
</fieldset>