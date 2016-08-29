<?php include 'connection.php';?>
<?php
		
		
		if(isset($_POST['submitted']) == 1)
		{
			$id =  $_POST['id'];
			$first = mysqli_real_escape_string($dbc, $_POST['first']);
			$last = mysqli_real_escape_string($dbc, $_POST['last']);
			$email = mysqli_real_escape_string($dbc, $_POST['email']);
				
			
			if(isset($_POST['id']) != ''){
				$action = 'updated';
				$query  = "UPDATE bookings SET first='$first', last='$last', email='$email' WHERE id= $_GET[id] ";
			}else{
				$action = 'added';
				$query = "INSERT INTO bookings (id, first, last, email) VALUES ($id, '$first', '$last', '$email')";
			}	
			
			
			$res = mysqli_query($dbc, $query);
			
			if($res)
			{
				$message = '<p class="alert alert-success">Booking was '.$action.'!</p>';
			}
			else {
				$message = '<p class="alert alert-danger"> Booking could not  be'.$action.' because: '.mysqli_errno($dbc);
				$message .= '<p class="alert alert-danger">'.$query.'</p>';
				
			}
		}
		if(isset($_GET['id'])) { $opened = data_post($dbc, $_GET['id']);	}
?>