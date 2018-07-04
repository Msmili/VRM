<?php
	
class seanceM extends CI_Model{
	
	function addSeance($libelle, $description, $dateheure, $user, $programme){

		$req = "INSERT INTO seance (libelleS, descriptionS, DateHeure, idUser, idProgramme) VALUES ('".$libelle."','".$description."','".$dateheure."','".$user."','".$programme."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
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
	
	function selectSeances($idCoach){
		
		
		$dt = new DateTime('now');
		$dt = $dt->fomat('d-m-Y H:i:s');
		
		$req = "SELECT DescriptifS, Dateheure, ValiderS, DureeS, IdUser, IdProgramme, libelleP nomU, prenomU, idCoach FROM programme, seance, user WHERE seance.IdUser = user.idU AND seance.idProgramme = programme.idP AND programme.idCoach = '".$idCoach."' AND Dateheure > '".$dt."' ORDER BY Dateheure ASC";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function selectSeancesUser($idCoach, $idUser){
		
		
		$dt = new DateTime('now');
		$dt = $dt->fomat('d-m-Y H:i:s');
		
		$req = "SELECT DescriptifS, Dateheure, ValiderS, DureeS, IdUser, IdProgramme, libelleP nomU, prenomU, idCoach, idUser FROM programme, seance, user WHERE seance.IdUser = user.idU AND user.idU = '".$idUser."' AND seance.idProgramme = programme.idP AND programme.idCoach = '".$idCoach."' AND Dateheure > '".$dt."' ORDER BY Dateheure ASC";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function updateSeance($description, $dateheure, $idSeance){
		
		$req = "UPDATE seance SET descriptionS = '".$description."', $DateHeure = '".$dateheure."' WHERE idS = '".$idSeance."';";
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