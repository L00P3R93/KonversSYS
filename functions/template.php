<?php 

function nav_main($dbc, $path)
{
	$query = "SELECT * FROM navigation ORDER BY position ASC";
	$res = mysqli_query($dbc, $query);
	
	while($nav = mysqli_fetch_assoc($res)){
		$nav['slug'] = get_slug($dbc, $nav['url']);
		
		?>
		
		<li<?php selected($path['call_parts'][0], $nav['slug'], ' class="active"') ?>><a href="<?php echo $nav['url'];?>"><?php echo $nav['label'];?></a></li>
			
	<?php }
}


?>