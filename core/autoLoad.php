<?php
	define('BASEPATH', realpath($_SERVER["DOCUMENT_ROOT"]));
	require_once(BASEPATH.'/core/dbConfig.php');
	require_once(BASEPATH.'/core/sessionConfig.php');

	$db = new dbConfig();
	$db->set_char('UTF8');

	$session = new sessionConfig();
	$session->start();

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date_current = date("Y-m-d H:i:s");
?>