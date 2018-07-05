<?php
	
class programmeM extends CI_Model{

<<<<<<< HEAD
    public function addProgramme($intitule, $description, $prix, $idCoach){
		
		$req = "INSERT INTO programme (IntituleP, DescriptionP, Prix, IdCoach) VALUES ('".$intitule."','".$description."','".$prix."','".$idCoach."'";
		$query = $this->db->query($req);
	}

    public function updateProgramme($description, $prix, $idProgramme){
		
		$req = "UPDATE Programme SET DescriptifP = '".$description."', PrixP = '".$prix."' WHERE IdP = '".$idProgramme."';";
=======
    public function addProgramme($intitule, $description, $prix,$nb, $idCoach)
    {

        $req = "INSERT INTO programme (intituleP, descriptifP, prix,nbSeance, idCoach) VALUES ('" . $intitule . "','" . $description . "','" . $prix . "','" . $nb . "','" . $idCoach . "')";
        $this->db->query($req);
    }

    public function last_programme(){
        $req = "SELECT IdP FROM programme ORDER BY IdP DESC";
        $query = $this->db->query($req);

        $row = $query->row_array();

        return $row;
    }

    public function updateProgramme($description, $prix, $idProgramme){
		
		$req = "UPDATE programme SET descriptifP = '".$description."', prix = '".$prix."' WHERE idP = '".$idProgramme."'";
>>>>>>> 0db11e08a41ca84cdb10999e7468bc2a7968e7f8
		$query = $this->db->query($req);
	}
	
<<<<<<< HEAD
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
=======
	public function ActiverProg($idProgramme){
        $req = "UPDATE seance SET ActifS = 1 WHERE idProgramme = '".$idProgramme."'";
        $this->db->query($req);
        $req = "UPDATE programme SET ActifP = 1 WHERE IdP = '".$idProgramme."';";
        $this->db->query($req);
	}
	
	public function DesactiverProg($idProgramme){
		$req = "UPDATE programme SET ActifP = 0 WHERE IdP = '".$idProgramme."';";
		$this->db->query($req);
	}
	
	public function SupprimerProg($idProgramme){
	    $req = "DELETE FROM seance WHERE idProgramme = '".$idProgramme ."';";
	    $this->db->query($req);
		$req = "DELETE FROM programme WHERE IdP = '".$idProgramme."';";
		$this->db->query($req);
>>>>>>> 0db11e08a41ca84cdb10999e7468bc2a7968e7f8
	}


    public function list_prog($idCoach){
        
		$req = "SELECT * FROM Programme WHERE IdCoach = '".$idCoach."';";
        $query = $this->db->query($req);

        $row = $query->result_array();

        return $row;
    }
}