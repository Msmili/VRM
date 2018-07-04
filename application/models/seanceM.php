<?php
	
class seanceM extends CI_Model{
	
	public function addSeance(){

    }

    public function list_seance($idC, $idP){
        $req = "SELECT IdS,LibelleS,DescriptifS, Dateheure, ValiderS, DureeS,NomU, PrenomU,IdU, IdProgramme,idCoach
                FROM programme INNER JOIN seance ON programme.idP = seance.idProgramme INNER JOIN user ON seance.idUser = user.idU
                WHERE programme.idCoach = '".$idC."' 
                AND Dateheure > '".date('Y-m-d H:i:s')."'
                ORDER BY Dateheure";

        $query = $this->db->query($req);

        $row = $query->result_array();

        return $row;
    }
	
}