<nav class="navbar navbar-default" role="navigation">
	
	<?php if ($debug == 1) {?>
		<!--<button id="btn-debug" class="btn btn-default"><i class="fa fa-bug"></i></button>-->
	<?php }?>
	
	<div class="container">
		<div class="navbar-header">
	      <a class="navbar-brand" href="#">
	        <img href="home" alt="Brand" class="tausi" src="images/tausi.jpg">
	      </a>
	    </div>
		<ul class="nav navbar-nav">
			<?php '<strong>'.nav_main($dbc, $path).'</strong>';?>
		</ul>
	</div>
</nav>