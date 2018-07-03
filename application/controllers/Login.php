<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
	{
	    $this->load->helper('assets');
		$this->load->view('accueil');
	}

    public function signup(){
        $this->load->view('connexion');
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
	    session_destroy();
        $this->load->view('accueil');
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
