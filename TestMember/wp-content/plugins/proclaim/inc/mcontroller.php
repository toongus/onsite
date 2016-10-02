<?php

function proc_ajax_json_echo() {
	$echo = 'hello world!';
	$id = '';
	$callProc = proc_mgr();
	$callProc->saveFormData();
	//$token = bin2hex(openssl_random_pseudo_bytes(16));
	//$token = bin2hex(random_bytes(16));
	//d5088fa1a968549503b611259fcc9d3a
	//@header( 'Content-Type: text/html; charset=' . get_option( 'blog_charset' ) );
	//echo '<textarea>' . $token . '</textarea>';
	/*
	class Emp {
		public $name = "";
		public $hobbies  = "";
		public $birthdate = "";
	}
	
	$e = new Emp();
	$e->name = "sachin";
	$e->hobbies  = "sports";
	$e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
	$e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));
	
	echo json_encode($e);
	*/
	exit();
}

?>