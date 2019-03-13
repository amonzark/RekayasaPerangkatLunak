<?php
    session_start();
    include_once("model/m_unggahpost.php");
    class c_unggahpost {
        public $model;

        function __construct() {
            $this->model=new m_unggahpost;
        }

        function index() {
            if(isset($_SESSION['SESS_MEMBER_ID'])) {
                include 'view/v_unggahpost.php';
            } else {
                include 'view/v_login.php';
            }
        }
    }
?>