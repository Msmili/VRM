<?php

class evalM extends CI_Model{
	
	function addEvaluation ($idUser, $idProgramme, $idCoach){
		//Voir comment automatiser le libelle !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		$lib = "";
		
		$dt = new DateTime('now');
		$dt = $dt->fomat('d-m-Y H:i:s');
		
		$req = "INSERT INTO Evaluation (Libelle, DateE, IdUser, IdProgramme, IdCoach) VALUES ('".$lib."','".$dt."','".$idUser."','".$idProgramme."', '".$idCoach."');";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
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
		$this->db->query($req);

	}
	
	private function getCommentaire($idEval){
		
		$req = "SELECT Commentaire FROM evaluation WHERE idE = '".$idEval."';";
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row['Commentaire'];
	}
	
	function commenter ($nom, $prenom, $temps, $text, $idEval){
		
		//A completer pour l'affichage !!!!!!!!!!!!!!!
		$commentaire = getCommentaire($idEval) + $text;
		
		$req = "UPDATE achater SET Commentaire = '".$commentaire."' WHERE idE = '".$idEval."';";
		$this->db->query($req);
	}

	public function updateEvalUser($ressenti,$diff,$avis){
        $req = "UPDATE evaluation SET RessentiE ='".$ressenti."', DifficulteE = '".$diff."',AvisE = '".$avis."'  WHERE idE = '".$id."';";
        $this->db->query($req);
    }
}