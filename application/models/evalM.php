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

	public function updateEvalUser($ressenti,$diff,$avis,$id){
        $req = "UPDATE evaluation SET RessentiE ='".$ressenti."', DifficulteE = '".$diff."',AvisE = '".$avis."'  WHERE idE = '".$id."';";
        //$req = "INSERT INTO evaluation (`RessentiE`,`DifficulteE`,`AvisE`) VALUES ('".$ressenti."','".$diff."','".$avis."')";
        $this->db->query($req);
        var_dump($req);exit;
    }
	public function confirmEvalUser($note,$com,$choix,$id){
        $req = "UPDATE evaluation SET NoteE ='".$note."', CommentaireE = '".$com."',ValiderE = '".$choix."'  WHERE idE = '".$id."';";
        $this->db->query($req);
    }

    public function getEvalUser($id){
        $req = "SELECT * FROM evaluation INNER JOIN user ON evaluation.idUserE = user.idU WHERE idSeanceE = '".$id."';";
        $query = $this->db->query($req);
        $row = $query->row_array();

        return $row;
    }

    public function note($id){
        $req ="SELECT noteE 
                FROM evaluation 
                WHERE idUserE = '".$id."'
                AND noteE != 0
                AND DateheureE < NOW()
                ORDER BY DateheureE";
        $query = $this->db->query($req);
        $row = $query->result_array();

        return $row;
    }

    public function seanceReussi($id){
        $req = "SELECT COUNT(ValiderE) as valide FROM evaluation WHERE idUserE = '".$id."' AND ValiderE = 1";
        $query = $this->db->query($req);
        $row = $query->row_array();

        return $row;

    }
    public function seanceEchoue($id){
        $req = "SELECT COUNT(ValiderE) as valide FROM evaluation WHERE idUserE = '".$id."' AND ValiderE = 0";
        $query = $this->db->query($req);
        $row = $query->row_array();

        return $row;

    }
}