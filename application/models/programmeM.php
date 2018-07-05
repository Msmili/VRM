<?php
	
class programmeM extends CI_Model{

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
		$query = $this->db->query($req);
		$row = $query->row-array();
		
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


    public function list_prog($id){
        $req = "SELECT * FROM programme WHERE idCoachP = '".$id."'";
        $query = $this->db->query($req);

        $row = $query->result_array();

        return $row;
    }
}