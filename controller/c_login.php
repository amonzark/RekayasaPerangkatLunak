<?php 
 session_start();
 include_once("model/m_login.php");
 class c_login
 {
 	public $model;
 	
 	function __construct()
 	{
 		$this->model=new m_login;
 	}

 	function index(){
 		include 'view/v_login.php';
 	}

 	function login(){
 		$this->model->login();
 	}
 	function logout(){
 		include 'model/m_logout.php';
 		//$this->model->logout();
 	}
 }
?>