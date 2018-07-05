<?php
	
class seanceM extends CI_Model{

	function addSeance($libelle, $description, $duree, $programme)
    {

        $req = "INSERT INTO seance (IntituleS, descriptifS, DureeS, idProgrammeS) VALUES ('" . $libelle . "','" . $description . "','" . $duree . "','" . $programme . "');";
        $this->db->query($req);
    }

    public function list_seance($idC){
        $req = "SELECT DISTINCT(IdS),IntituleS,DescriptifS, DateHeureE, DureeS,NomU, PrenomU,IdU, IdProgrammeS,IntituleP,idCoachP
                FROM programme 
                INNER JOIN seance ON programme.idP = seance.idProgrammeS 
                INNER JOIN evaluation ON programme.IdCoachP = evaluation.IdCoachE                
                INNER JOIN user ON evaluation.IdUserE = user.IdU
                WHERE programme.idCoachP = '".$idC."' 
                AND DateheureE > '".date('Y-m-d H:i:s')."'
                ORDER BY DateheureE";

        $query = $this->db->query($req);

        $row = $query->result_array();

        return $row;
    }	

    public function seance_programme($idP){
        $req = "SELECT IntituleS,DescriptifS,DureeS FROM seance WHERE IdProgrammeS = '".$idP."'";
        $query = $this->db->query($req);
        $row = $query->result_array();

        return $row;
    }

	function selectSeances($idCoach){
		
		
		$dt = new DateTime('now');
		$dt = $dt->fomat('d-m-Y H:i:s');

		$req = "SELECT DescriptifS, DureeS, IdUser, IdProgrammeS, libelleP, nomU, prenomU, idCoachP FROM programme, seance, user WHERE seance.IdUser = user.idU AND seance.idProgramme = programme.idP AND programme.idCoach = '".$idCoach."' AND Dateheure > '".$dt."' ORDER BY Dateheure ASC";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function selectSeancesUser($idCoach, $idUser){
		
		
		$dt = new DateTime('now');
		$dt = $dt->fomat('d-m-Y H:i:s');
		
		$req = "SELECT DescriptifS, DureeS, IdUser, IdProgrammeS, libelleP, nomU, prenomU, idCoachP, idUser FROM programme, seance, user WHERE seance.IdUser = user.idU AND user.idU = '".$idUser."' AND seance.idProgramme = programme.idP AND programme.idCoach = '".$idCoach."' AND Dateheure > '".$dt."' ORDER BY Dateheure ASC";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function updateSeance($description, $dateheure, $idSeance){
		
		$req = "UPDATE seance SET descriptionS = '".$description."'WHERE idS = '".$idSeance."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function ActiverSeance($idSeance){
		
		$req = "DELETE FROM seance WHERE idS = '".$idSeance."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
}