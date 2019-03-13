<?php 
session_start();
include_once("model/m_profil.php");
class c_profil {
	public $model;

	function __construct() {
		$this->model=new m_profil;
	}

	function index() {
		$show = $this->model->Showprofil();
		include 'view/v_showprofil.php';
		//include 'view/v_editprofil.php';
	}

	function editprofil() {
		$edit = $this->model->editprofil();
		include 'view/v_editprofil.php';
		//$this->model=new editprofil();
	}
}
?>