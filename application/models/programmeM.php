<?php
	
class programmeM extends CI_Model{

    public function addProgramme($intitule, $description, $prix, $idCoach){
		
		$req = "INSERT INTO programme (IntituleP, DescriptionP, Prix, IdCoach) VALUES ('".$intitule."','".$description."','".$prix."','".$idCoach."'";
		$query = $this->db->query($req);
	}

    public function updateProgramme($description, $prix, $idProgramme){
		
		$req = "UPDATE Programme SET DescriptifP = '".$description."', PrixP = '".$prix."' WHERE IdP = '".$idProgramme."';";
		$query = $this->db->query($req);
	}
	
	function ActiverProg($idProgramme){
				
		$req = "UPDATE Programme SET ActifP = true WHERE IdProgramme = '".$idProgramme."';";
		$query = $this->db->query($req);
	}
	
	function DeactiverProg($idProgramme){
		
		$req = "UPDATE Programme SET ActifP = false WHERE idProgramme = '".$idProgramme."';";
		$query = $this->db->query($req);
	}
	
	function SupprimerProg($idProgramme){
		
		$req = "DELETE FROM Programme WHERE IdP = '".$idProgramme."';";
		$query = $this->db->query($req);
	}


    public function list_prog($idCoach){
        
		$req = "SELECT * FROM Programme WHERE IdCoach = '".$idCoach."';";
        $query = $this->db->query($req);

        $row = $query->result_array();

        return $row;
    }
}