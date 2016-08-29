<?php 
function data_setting_value($dbc, $id)
{
	$query = "SELECT * FROM settings WHERE id = '$id'";
	$res = mysqli_query($dbc, $query);

	$data = mysqli_fetch_assoc($res);
	
	return $data['value'];
}

function data_post_type($dbc, $id)
{
	$query = "SELECT * FROM post_types WHERE id=$id ";
	$r = mysqli_query($dbc, $query);
	$data = mysqli_fetch_assoc($r);
	
	return $data;
}

function data_post($dbc, $id){
		
		if(is_numeric($id)){
			$cond = "WHERE id = $id";
		}
		else
		{
			$cond = "WHERE slug = '$id'";
		}
		
		$query = "SELECT * FROM post $cond ";
		$r = mysqli_query($dbc, $query);
		$data = mysqli_fetch_assoc($r);
		
		$data['body_nohtml'] = strip_tags($data['body']);
		
		if($data['body'] == $data['body_nohtml'])
		{
			$data['body_formatted'] = '<p>'.$data['body'].'</p>';
			
		}
		else{
			$data['body_formatted'] = $data['body'];		}
		
		return $data;
}


?>
