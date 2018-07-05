<?php
	
class userM extends CI_Model{
	
	function inscription($nom, $prenom, $datenaiss, $sexe, $email, $mdp, $tel, $adresse, $ville, $cp, $poid, $taille){
		
		$dt = new DateTime();
		$dt = $dt->fomat('d-m-Y H:i:s');
		//Exemple values ('Smili','Mehdi','1995-02-08','M','smilimehdi91@hotmail.fr','smili','0669122369','402 quare du dragon','Evry','91000','78','1.90','2016-10-10')
        $req = "INSERT INTO User (NomU, PrenomU,DateNaissU,SexeU,EmailU,PasswordU,TelephoneU,AdresseU,VilleU,CodePostalU,PoidsU,TailleU,DateInscriptionU) VALUES ('".$nom."','".$prenom."','".$datenaiss."','".$sexe."','".$email."','".$mdp."','".$tel."','".$adresse."','".$ville."','".$cp."','".$poids.",'".$taille."','".$dt."')";
        $query = $this->db->query($req);
	}
		
	function updateUserMail($id, $mail){
		
		$mail = $this->security->xss_clean($mail);
		
		$req = "UPDATE User SET EmailU = '".$mail."' WHERE IdU = '".$id."';";
		$query = $this->db->query($req);
	}
	
	function acheter($idUser, $idProduit){
	
		$req = "INSERT INTO Acheter (idUser, idProgramme, DateA) VALUES ('".$idUser."','".$idProgramme."', '".date('Y-m-d H:i:s')."');";
        $query = $this->db->query($req);
  	}
		
	function updateUserMdp($id, $mdp){
		
		$mail = $this->security->xss_clean($mdp);
		
		$req = "UPDATE User SET PasswordU = '".$mdp."' WHERE IdU = '".$id."';";
		$query = $this->db->query($req);
	}
	
	function updateUser($id, $tel, $adresse, $ville, $cp, $poid){
		
		$req = "UPDATE User SET TelephoneU = '".$tel."', AdresseU = '".$adresse."', VilleU = '".$ville."', CodePostalU = '".$cp."', PoindsU = '".$poid."' WHERE IdU = '".$id."';";
		$query = $this->db->query($req);
	}

	public function liste_pack(){
	    $req = "SELECT * FROM programme";
	    $query = $this->db->query($req);
	    $row = $query->result_array();

	    return $row;
	}

	public function detail_pack($id){
        $req = "SELECT * FROM programme WHERE idP = ".$id;
        $query = $this->db->query($req);
        $row = $query->result_array();

        return $row;
    }

    public function updateData($tab){
	    $res = array_filter($tab);
	    foreach($res as $key=>$value){
	        $req = "UPDATE user SET ".$key." = '".$value."'";
	        $this->db->query($req);
        }
    }
}
