<?php
	
class programmeM extends CI_Model{

    public function addProgramme($intitule, $description, $nbSeances, $prix, $idCoach){
		
		$req = "INSERT INTO programme (IntituleP, DescriptionP, NBSeance, Prix, IdCoach) VALUES ('".$intitule."','".$description."','".$nbSeances."','".$prix."','".$idCoach."'";
		$query = $this->db->query($req);
	}

    public function updateProgramme($description, $prix, $nbSeances, $idProgramme){
		
		$req = "UPDATE Programme SET DescriptifP = '".$description."', PrixP = '".$prix."', NBSeance ='".$nbSeances."', WHERE IdP = '".$idProgramme."';";
		$query = $this->db->query($req);

    public function last_programme(){
        
		$req = "SELECT IdP FROM programme ORDER BY IdP DESC";
        $query = $this->db->query($req);

        $row = $query->row_array();

        return $row;
    }
	
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
	}


    public function list_prog($idCoach){
        
		$req = "SELECT * FROM Programme WHERE IdCoach = '".$idCoach."';";
        $query = $this->db->query($req);

        $row = $query->result_array();

        return $row;
    }
}