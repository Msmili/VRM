<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index()
	{
	    $this->load->helper('assets');
		$this->load->view('accueil');
	}

	public function authentifier(){
	    $this->load->model('loginM');
	    //$mail = $_POST['email'];
	    //$pass = $_POST['password'];
        $mail = 'test';
        $pass = 'test';
	    $this->loginM->connexion($mail,$pass);
    }

    public function reset_password(){

    }
}
