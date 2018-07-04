<?php
	
class programmeM extends CI_Model{
	
	function addProgramme($intitule, $description, $prix, $nbSeance, $idCoach){
		
		$req = "INSERT INTO programme (intituleP, descriptionP, prix, nbSeance, idCoach) VALUES ('".$intitule."','".$description."','".$prix."','".$nbSeance."','".$idCoach."'";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}	
	
		
		$query = $this->db->query($req);
		$row = $query->row-array();
		
		return $row;
	}
	
		
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
}