<?php
/* Shortcodes */
function company($atts=null, $content=null){
	$company = get_field('company', 'options');
	return $company;
}
add_shortcode('company', 'company');


?>