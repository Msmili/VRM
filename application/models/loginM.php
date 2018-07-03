<?php

class loginM extends CI_Model {

    function connexion(){
        $mail = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        //verif mail et pass xss_clean
        $req = "SELECT IdU,EmailU,PasswordU FROM user WHERE EmailU = '".$mail."'";
        $query = $this->db->query($req);
        $row = $query->row_array();

        if($mail == $row['EmailU'] && $password == $row['PasswordU']){
            $res = true;
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id_user'] = $row['IdU'];
            $_SESSION['email'] = $row['EmailU'];
        }else{
            $res = false;
        }

        return $res;
    }

    public function disconnect(){
        session_destroy();

        redirect('https://www.google.fr');
    }

    public function reset_password(){
        $password = $this->security->xss_clean($this->input->post('password'));
        $password_verif = $this->security->xss_clean($this->input->post('password_confirm'));
        if($password == $password_verif) {
            //verif mail et pass xss_clean
            $req = "UPDATE user SET passwordU = '" . $password . "'";
            $query = $this->db->query($req);

            $valid = true;

            return $valid;
        }else{
            $error = 'Désolé mais vos mots de passes ne correspondent pas.';

            return $error;
        }
    }
}