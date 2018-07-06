<?php

class evalM extends CI_Model{
	
	function addEvaluation ($idUser, $idProgramme, $idCoach){
		//Voir comment automatiser le libelle !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		$seance = seance_programme($idProgramme);
		$res = Count($seance);
		for ($i=0; $i<$res; $i++){
			$s = $seance[$i];
			$dt = new DateTime('now');
			$dt = $dt->fomat('d-m-Y H:i:s');
			
			$dt2 = new datetime("")
			$req = "INSERT INTO Evaluation (Libelle, DateE, IdUser, IdProgramme, IdCoach) VALUES ('".$s['LibelleS']."','date_add(now(),interval '".2+$i."' day)','".$idUser."','".$idProgramme."', '".$idCoach."');";
			$query = $this->db->query($req);
		}
	}
	public function seance_programme($idP){
        $req = "SELECT LibelleS,DescriptifS,DureeS FROM seance WHERE IdProgramme = '".$idP."'";
        $query = $this->db->query($req);
        $row = $query->result_array();
        return $row;
    	}
	
	function noter ($idEval, $note){
		
		$req = "UPDATE evaluation SET Note = '".$note."' WHERE idE = '".$id."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	function updateValderProg ($idEval){
		
		$req = "UPDATE evaluation SET ValiderE = true WHERE idE = '".$id."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
	private function getCommentaire($idEval){
		
		$req = "SELECT Commentaire FROM evaluation WHERE idE = '".$idEval."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row['Commentaire'];
	}
	
	function commenter ($nom, $prenom, $temps, $text, $idEval){
		
		//A completer pour l'affichage !!!!!!!!!!!!!!!
		$commentaire = getCommentaire($idEval) + $test;
		
		$req = "UPDATE achater SET Commentaire = '".$commentaire."' WHERE idE = '".$idEval."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
}
