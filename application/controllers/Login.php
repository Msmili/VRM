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
        $res = $this->loginM->reset_password();

        if($res){
            $data['msg'] = 'Votre mot de passe a été modifié.';
        }else{
            $data['msg'] = 'Désolé mais vos mots de passes ne correspondent pas.';
        }

        $this->load->view('connexion',$data);
    }
}
