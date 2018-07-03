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
	    $res = $this->loginM->connexion();

	    if($res){
	        $this->load->view('accueil');
        }else{
	        $this->load->view('connexion');
        }
    }

    public function logout(){
	    $this->loginM->disconnect();
    }

    public function reset_password(){

    }
}
