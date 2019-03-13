<?php 
session_start();
include_once("model/m_post.php");
class c_post {
	public $model;

	function __construct() {
		$this->model=new m_post;
	}

	function index() {
		include 'view/v_search.php';
	}

	function search() {
		$output=$this->model->search();
		include 'view/v_search.php';
	}

	function viewpost() {
		$view=$this->model->viewpost();
		include 'view/v_viewpost.php';
	}

	function viewmypost() {
		$view = $this -> model -> viewmypost();
		include 'view/v_viewmypost.php';
	}

	function editmypost() {
		$edit = $this -> model -> editmypost($_GET['postid']);
		include 'view/v_editmypost.php';
	}

	function deletemypost() {
		$delete = $this -> model -> deletemypost($_GET['postid']);
		$view = $this -> model -> viewmypost();
		include 'view/v_viewmypost.php';
	}
}
?>