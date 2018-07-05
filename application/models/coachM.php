<?php
	
class coachM extends CI_Model{
	
	function updateCoachMail($idCoach, $mail){
		
		$mail = $this->security->xss_clean($mail);
		
<<<<<<< HEAD
		$req = "UPDATE Coach SET EmailC = '".$mail."' WHERE IdC = '".$id."';";
=======
		$req = "UPDATE coach SET emailC = '".$mail."' WHERE idC = '".$idCoach."';";
>>>>>>> 0db11e08a41ca84cdb10999e7468bc2a7968e7f8
		$query = $this->db->query($req);
	}
	
	function updateCoachMdp($idCoach, $mdp){
		
		$mail = $this->security->xss_clean($mdp);
		
<<<<<<< HEAD
		$req = "UPDATE Coach SET PasswordC = '".$mdp."' WHERE IdC = '".$id."';";
=======
		$req = "UPDATE coach SET passwordC = '".$mdp."' WHERE idC = '".$idCoach."';";
>>>>>>> 0db11e08a41ca84cdb10999e7468bc2a7968e7f8
		$query = $this->db->query($req);
	}
	
<<<<<<< HEAD
	function updateCoach($id, $tel, $adresse, $ville, $cp){
		
		$req = "UPDATE Coach SET TelephoneC = '".$tel."', AdresseC = '".$adresse."', VilleC = '".$ville."', CodePostalC = '".$cp."' WHERE IdC = '".$id."';";
=======
	function updateCoach($idCoach, $tel, $adresse, $ville, $cp, $poid){
		
		$req = "UPDATE coach SET telephoneC = '".$tel."', adresseC = '".$adresse."', villeC = '".$ville."', CodePostalC = '".$cp."', poindsC = '".$poid."' WHERE idC = '".$idCoach."';";
>>>>>>> 0db11e08a41ca84cdb10999e7468bc2a7968e7f8
		$query = $this->db->query($req);
	}
	
	function selectClients($idCoach){
		
		$req = "SELECT nomU, prenomU, idU, idC, idP FROM coach, user, programme, acheter WHERE programme.idCoach = coach.idC AND programme.idP = acheter.idProgramme AND user.idU = acheter.isUser AND idC = '".$idCoach."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}	
}
