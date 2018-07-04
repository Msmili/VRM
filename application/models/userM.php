<?php
	
class userM extends CI_Model{
	
	function inscription($nom, $prenom, $datenaiss, $sexe, $email, $mdp, $tel, $adresse, $ville, $cp, $poid, $taille){
		$dt = new DateTime();
		$dt = $dt->fomat('d-m-Y H:i:s');
		//Exemple values ('Smili','Mehdi','1995-02-08','M','smilimehdi91@hotmail.fr','smili','0669122369','402 quare du dragon','Evry','91000','78','1.90','2016-10-10')
        $req = "INSERT INTO user (NomU, PrenomU,DateNaissU,SexeU,EmailU,PasswordU,TelephoneU,AdresseU,VilleU,CodePostalU,PoidsU,TailleU,DateInscriptionU) VALUES ('".$nom."','".$prenom."','".$datenaiss."','".$sexe."','".$email."','".$mdp."','".$tel."','".$adresse."','".$ville."','".$cp."','".$poids.",'".$taille."','".$dt."')";
        $query = $this->db->query($req);
        $row = $query->row();

        return $row;
	}
		
	function updateUserMail($id, $mail){
		
		$mail = $this->security->xss_clean($mail);
		
		$req = "UPDATE user SET emailU = '".$mail."' WHERE idU = '".$id."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function acheter($idUser, $idProduit){
		
		$dt = new DateTime('now');
		$dt = $dt->fomat('d-m-Y H:i:s');
		
		$req = "INSERT INTO acheter (idUser, idProgramme, DateA) VALUES ('".$idUser."','".$idProgramme."', '".$dt."';";
        $query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
		
	function updateUserMdp($id, $mdp){
		
		$mail = $this->security->xss_clean($mdp);
		
		$req = "UPDATE user SET passwordU = '".$mdp."' WHERE idU = '".$id."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function updateUser($id, $tel, $adresse, $ville, $cp, $poid){
		
		$req = "UPDATE user SET telephoneU = '".$tel."', adresseU = '".$adresse."', villeU = '".$ville."', CodePostalU = '".$cp."', poindsU = '".$poid."' WHERE idU = '".$id."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}

	public function liste_pack(){
	    $req = "SELECT * FROM programme";
	    $query = $this->db->query($req);
	    $row = $query->result_array();

	    return $row;
	}
}
