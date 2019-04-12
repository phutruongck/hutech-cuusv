<?php require_once('./core/autoLoad.php');

	defined('BASEPATH') OR exit('No direct script access allowed');

	if(isset($_GET['action'])) {
		$action = addslashes(trim(htmlentities(strtolower($_GET['action']))));
		$action = ($action == '') ? 'home' : $action;
	}
	else {
		$action = 'home';
	}
	
	if($action == 'home') {
		require_once(BASEPATH.'/controllers/HomeController.php');
	}
	else if($action == 'register') {
		require_once(BASEPATH.'/controllers/RegisterController.php');
	}
	else if($action == 'error') {
		require_once(BASEPATH.'/controllers/ErrorController.php');
	}
	else {
		require_once(BASEPATH.'/controllers/ErrorController.php');
	}
?>