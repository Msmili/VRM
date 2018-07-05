<?php
	
class seanceM extends CI_Model{
	
	public function addSeance(){

    }

    public function list_seance($idC, $idP){
        $req = "SELECT IdS, IntituleS, DescriptifS, DateHeureE, ValiderE, DureeS, NomU, PrenomU, IdU, IdProgramme, IdCoach
                FROM Programme INNER JOIN Seance ON Programme.IdP = Seance.IdProgramme INNER JOIN User ON Seance.IdUser = User.IdU
                WHERE Programme.IdCoach = '".$idC."' 
                AND DateHeureE > '".date('Y-m-d H:i:s')."'
                ORDER BY DateHeureE";

        $query = $this->db->query($req);

        $row = $query->result_array();

        return $row;
    }
	
}