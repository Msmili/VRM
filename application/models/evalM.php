<?php

class evalM extends CI_Model{
	
	function addEvaluation ($idUser, $idCoach,$idProgramme){

	    $req = "INSERT INTO acheter (`IdUserA`,`IdProgrammeA`,`DateA`) VALUES('".$idUser."','".$idProgramme."','now()')";
        $this->db->query($req);
		//Voir comment automatiser le libelle !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		$seance = $this->seance_programme($idProgramme);
		$res = Count($seance);
		$day = new DateTime();
		for ($i=0; $i<$res; $i++){
		    $date = $day->add(new DateInterval('P'.($i+1).'D'));
			$req = "INSERT INTO Evaluation (DateheureE, IdUserE, IdSeanceE, IdCoachE) VALUES ('".$date->format('Y-m-d H:i:s') ."','".$idUser."','".$seance[$i]['IdS']."', '".$idCoach."');";
			$query = $this->db->query($req);
		}
	}
	public function seance_programme($idP){
        $req = "SELECT IntituleS,DescriptifS,DureeS,IdS FROM seance WHERE IdProgrammeS = '".$idP."'";
        $query = $this->db->query($req);
        $row = $query->result_array();
        return $row;
    	}

    function noter ($idEval, $note){

        $req = "UPDATE evaluation SET Note = '".$note."' WHERE idE = '".$idEval."';";
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