<?php
/* Shortcodes */
function company($atts=null, $content=null){
	$company = get_field('company', 'options');
	return $company;
}
add_shortcode('company', 'company');

function phone($atts=null, $content=null){
	$phone = get_field('phone', 'options');
	return $phone;
}
add_shortcode('phone', 'phone');

function email($atts=null, $content=null){
	$email = get_field('email', 'options');
	return $email;
}
add_shortcode('email', 'email');
?>