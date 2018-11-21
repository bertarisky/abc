<?php 

function isLoggedIn(){
	$CI = get_instance();

	$CI->load->model('UserModel');

	
	if (!$CI->UserModel->isLogin()) {
    	return false;
    }else{
    	return true;
    }
}

function needLogin(){
	
	if (!isLoggedIn()) {
    	redirect('user/login');
    }
}