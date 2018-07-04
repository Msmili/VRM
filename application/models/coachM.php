<?php
	
class coachM extends CI_Model{
	
		
		$mail = $this->security->xss_clean($mail);
		
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
		
		$mail = $this->security->xss_clean($mdp);
		
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
	
		
		$query = $this->db->query($req);
        $row = $query->row_array();
		
		return $row;
	}
}