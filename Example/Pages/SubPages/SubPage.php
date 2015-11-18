<?php
	error_reporting(-1);
	ini_set('display_errors', 'On');
	
	require_once '../../lib/ClassLoader.php';
	
	AClass::aFunction();
	echo '<br />';
	SubClass::SubFunction();
?>