<?php 
/** 
* Functions 
* 
* @package Debt Bombers 
* @author Eric Baker <eric@trafficlight.me> 
* @copyright Copyright (c) 2015, Allen Turner Law
* 
*/ 

/** Start the engine */
require_once( TEMPLATEPATH . '/lib/init.php' );

/** 
* Theme Setup 
* 
* This setup function attaches all of the site-wide functions 
* to the correct actions and filters. All the functions themselves 
* are defined below this setup function. 
* 
*/ 

add_action('genesis_setup','child_theme_setup', 15); 
function child_theme_setup() { 

}


?>