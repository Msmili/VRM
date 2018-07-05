<?php
	
class programmeM extends CI_Model{
    public function list_prog($idUser){
        
		$req = "SELECT IntituleP , Descriptif , Prix , NomC , PrenomC , IdUsearA , DateA FROM acheter , programme WHERE ACHETER.idProgrammeA=programme.IdP 
		AND IdUserA = '".$idUser."' Oder By DateA DESC;";
        $query = $this->db->query($req);
        $row = $query->result_array();
        return $row;
    }
}