<?php
//Setup file:
error_reporting(0);

#Database connection:
include('config/connection.php');

#Constants
DEFINE('D_TEMPLATE', 'templates');
DEFINE('D_VIEW', 'views');

#Functions
include('functions/sandbox.php');
include('functions/data.php');
include('functions/template.php');

#Site setup:
$debug =  data_setting_value($dbc, 'debug-status');
$path = get_path();

$site_title = 'Tausi Hires';



if(!isset($path['call_parts'][0]) || $path['call_parts'][0]== '')
{
	//$path['call_pars'][0] = 'home';//setting the value of $path['call_pars'][0] equal to url
	header('Location: home');
}


#Page setup 
$page = data_post($dbc, $path['call_parts'][0] );
$views = data_post_type($dbc, $page['type']);



?>