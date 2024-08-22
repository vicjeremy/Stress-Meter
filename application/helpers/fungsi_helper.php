<?php

function check_already_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('id');
	if($user_session){
		redirect('crud');
	}
}

function check_not_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('id');
	if(!$user_session){
		redirect('auth/login');
	}
}