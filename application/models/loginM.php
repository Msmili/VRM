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
            $res = 'user';
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id_user'] = $row['IdU'];
            $_SESSION['email'] = $row['EmailU'];
        }else{
            $req = "SELECT IdC,EmailC,PasswordC FROM coach WHERE EmailC = '".$mail."'";
            $query = $this->db->query($req);
            $row = $query->row_array();
            if($mail == $row['EmailC'] && $password == $row['PasswordC']) {
                $res = 'coach';
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['id_coach'] = $row['IdC'];
                $_SESSION['email'] = $row['EmailC'];
            }else{
                $res = 'error';
            }
        }

        return $res;
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
	
	function selectUser($id){
		$req = "Select * FROM User Where IdU = '".$id."';";
        $query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function selectIdUser($mail){
		$req = "Select IdU FROM User Where EmailU = '".$mail."';";
        $query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
}