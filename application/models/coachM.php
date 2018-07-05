<?php
	
class coachM extends CI_Model{
	
	function updateCoachMail($id, $mail){
		
		$mail = $this->security->xss_clean($mail);
		
		$req = "UPDATE Coach SET EmailC = '".$mail."' WHERE IdC = '".$id."';";
		$query = $this->db->query($req);
	}
	
	function updateCoachMdp($id, $mdp){
		
		$mail = $this->security->xss_clean($mdp);
		
		$req = "UPDATE Coach SET PasswordC = '".$mdp."' WHERE IdC = '".$id."';";
		$query = $this->db->query($req);
	}
	
	function updateCoach($id, $tel, $adresse, $ville, $cp){
		
		$req = "UPDATE Coach SET TelephoneC = '".$tel."', AdresseC = '".$adresse."', VilleC = '".$ville."', CodePostalC = '".$cp."' WHERE IdC = '".$id."';";
		$query = $this->db->query($req);
	}

}
