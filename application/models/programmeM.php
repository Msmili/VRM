<?php
	
class programmeM extends CI_Model{
	
	function addProgramme($intitule, $description, $prix, $nbSeance, $idCoach){
		
		$req = "INSERT INTO programme (intituleP, descriptionP, prix, nbSeance, idCoach) VALUES ('".$intitule."','".$description."','".$prix."','".$nbSeance."','".$idCoach."'";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}	
	
	function updateProgramme($description, $prix, $idProgramme){
		
		$req = "UPDATE programme SET descriptifP = '".$description."', prix = '".$prix."' WHERE idP = '".$idProgramme."'";
		$query = $this->db->query($req);
		$row = $query->row-array();
		
		return $row;
	}
	
	function ActiverProg($idProgramme){
		
		$req = "UPDATE achater SET ActifP = true WHERE idProgramme = '".$idProgramme."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function DeactiverProg($idProgramme){
		
		$req = "UPDATE achater SET ActifP = false WHERE idProgramme = '".$idProgramme."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function SupprimerProg($idProgramme){
		
		$req = "DELETE FROM programme WHERE idProgramme = '".$idProgramme."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
}