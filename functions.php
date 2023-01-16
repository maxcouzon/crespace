
<?php

function writestring($string)
{
echo($string);
} 

//writestring('hello');?>
<?php 
//load
wp_enqueue_style('app',get_template_directory_uri().'../assets/css/app.css', array(), false, 'all');
?>