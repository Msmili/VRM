<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

    public function index()
    {
        $this->load->helper('assets');
        $this->load->view('main/header');
        $this->load->view('accueil');
        $this->load->view('main/footer');
    }
}
