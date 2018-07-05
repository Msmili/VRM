<?php
	
class coachM extends CI_Model{
	
	function updateCoachMail($idCoach, $mail){
		
		$mail = $this->security->xss_clean($mail);
		
		$req = "UPDATE Coach SET EmailC = '".$mail."' WHERE IdC = '".$id."';";
		$query = $this->db->query($req);
	}
	
	function updateCoachMdp($idCoach, $mdp){
		
		$mail = $this->security->xss_clean($mdp);
		
		$req = "UPDATE Coach SET PasswordC = '".$mdp."' WHERE IdC = '".$id."';";
		$query = $this->db->query($req);
	}
	
	function updateCoach($id, $tel, $adresse, $ville, $cp){
		
		$req = "UPDATE Coach SET TelephoneC = '".$tel."', AdresseC = '".$adresse."', VilleC = '".$ville."', CodePostalC = '".$cp."' WHERE IdC = '".$id."';";
		$query = $this->db->query($req);
	}
	
	function selectClients($idCoach){
		
		$req = "SELECT nomU, prenomU, idU, idC, idP FROM coach, user, programme, acheter WHERE programme.idCoach = coach.idC AND programme.idP = acheter.idProgramme AND user.idU = acheter.isUser AND idC = '".$idCoach."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}	
}
