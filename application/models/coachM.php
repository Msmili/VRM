<?php

    class coachM extends CI_Model {

        public function liste_prog($id){
            $req = "SELECT * FROM programme WHERE idCoach = '".$id."'";
            $query = $this->db->query($req);

            $row = $query->result_array();

            return $row;
        }
    }