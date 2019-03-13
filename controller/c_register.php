<?php
include_once("model/m_register.php");
class c_register {
	public $model;

	function __construct() {
		$this->model=new m_register;
	}

	function index() {
		//$show = $this->model->Showprofil();
		include 'view/v_register.php';
	}

	function register() {
		$this->model=new m_register;
	}
}
?>