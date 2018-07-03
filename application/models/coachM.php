<?php
	
class coachM extends CI_Model{
	
	function updateCoachMail($id, $mail){
		
		$mail = $this->security->xss_clean($mail);
		
		$req = "UPDATE coach SET emailC = '".$mail."' WHERE idC = '".$id."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function updateCoachMdp($id, $mdp){
		
		$mail = $this->security->xss_clean($mdp);
		
		$req = "UPDATE coach SET passwordC = '".$mdp."' WHERE idC = '".$id."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function updateCoach($id, $tel, $adresse, $ville, $cp, $poid){
		
		$req = "UPDATE coach SET telephoneC = '".$tel."', adresseC = '".$adresse."', villeC = '".$ville."', CodePostalC = '".$cp."', poindsC = '".$poid."' WHERE idC = '".$id."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
}