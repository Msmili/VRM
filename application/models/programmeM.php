<?php
	
class programmeM extends CI_Model{
	
	function addProgramme($intitule, $description, $prix, $nbSeance, $idCoach){
		
		$req = "INSERT INTO programme (intituleP, descriptionP, prix, nbSeance, idCoach) VALUES ('".$intitule."','".$description."','".$prix."','".$nbSeance."','".$idCoach."'";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}	
	
	function updateProgramme($description, $prix, $nbSeance, $idProgramme){
		
		$req = "UPDATE programme SET descriptifP = '".$description."', prix = '".$prix."', nbSeance = '".$nbSeance."' WHERE idP = '".$idProgramme."'";
		$query = $this->db->query($req);
		$row = $query->row-array();
		
		return $row;
	}
	
	function updateProgrammeVal($idUser, $idProgramme, $date){
		
		$req = "UPDATE achater SET validerA = true WHERE idProgramme = '".$idProgramme."' AND idUser = '".$idUser."' AND dateA = '".$date."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
}