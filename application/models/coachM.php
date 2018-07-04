<?php
	
class coachM extends CI_Model{
	
	function updateCoachMail($idCoach, $mail){
		
		$mail = $this->security->xss_clean($mail);
		
		$req = "UPDATE coach SET emailC = '".$mail."' WHERE idC = '".$idCoach."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function updateCoachMdp($idCoach, $mdp){
		
		$mail = $this->security->xss_clean($mdp);
		
		$req = "UPDATE coach SET passwordC = '".$mdp."' WHERE idC = '".$idCoach."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function updateCoach($idCoach, $tel, $adresse, $ville, $cp, $poid){
		
		$req = "UPDATE coach SET telephoneC = '".$tel."', adresseC = '".$adresse."', villeC = '".$ville."', CodePostalC = '".$cp."', poindsC = '".$poid."' WHERE idC = '".$idCoach."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
<<<<<<< HEAD
	
	
	function selectClients($idCoach){
		
		$req = "SELECT nomU, prenomU, idU, idC, idP FROM coach, user, programme, acheter WHERE programme.idCoach = coach.idC AND programme.idP = acheter.idProgramme AND user.idU = acheter.isUser AND idC = '".$idCoach."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}	
}
=======

}
>>>>>>> ba64ba9e8104cea3936c15a54534e3765d7ab268
