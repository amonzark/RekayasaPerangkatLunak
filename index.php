<?php
// setup auto loader
set_include_path("controller/");
spl_autoload_extensions(".php");
spl_autoload_register();

// ambil informasi path info
if(empty($_SERVER['PATH_INFO'])){
	$controller='c_halutama';
	$method='index';
}else{
	$pathInfo = $_SERVER['PATH_INFO'];
	// ambil controller dan method dari path info
	$mvc = explode("/", $pathInfo);
	$controller = $mvc[1];
	// $method = $mvc[2];
	if(empty($controller)){
		$controller='c_login';
		$method='index';
	}else if(empty($mvc[2])){
		$method='index';
	}else{
		$method = $mvc[2];
	}
}
$c = new $controller();
	call_user_func(array($c, $method));
	?>