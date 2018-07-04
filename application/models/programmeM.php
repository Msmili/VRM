<?php
	
class programmeM extends CI_Model{

    public function addProgramme($intitule, $description, $prix, $idCoach){
		
		$req = "INSERT INTO programme (intituleP, descriptionP, prix, nbSeance, idCoach) VALUES ('".$intitule."','".$description."','".$prix."','".$nbSeance."','".$idCoach."'";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
<<<<<<< HEAD
	}	
	
	function updateProgramme($description, $prix, $idProgramme){
=======
	}

    public function updateProgramme($description, $prix, $idProgramme){
>>>>>>> ba64ba9e8104cea3936c15a54534e3765d7ab268
		
		$req = "UPDATE programme SET descriptifP = '".$description."', prix = '".$prix."' WHERE idP = '".$idProgramme."'";
		$query = $this->db->query($req);
		$row = $query->row-array();
		
		return $row;
	}
<<<<<<< HEAD
	
	function ActiverProg($idProgramme){
=======

    public function updateProgrammeVal($idUser, $idProgramme, $date){
>>>>>>> ba64ba9e8104cea3936c15a54534e3765d7ab268
		
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


    public function list_prog($id){
        $req = "SELECT * FROM programme WHERE idCoach = '".$id."'";
        $query = $this->db->query($req);

        $row = $query->result_array();

        return $row;
    }
}