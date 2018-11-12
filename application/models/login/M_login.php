<?php

defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_login extends CI_Model{	
    function cek_login($table,$usn){		
		//$this->db->where("email", $usn);		
		$this->db->where("NIM",$usn);
		$query = $this->db->get("t_login");
       return $query;
	}	
	function hak_ak($usan){          
                $this->db->where("NIM='$usan' OR email='$usan'");
                $hasil=$this->db->get('t_login');
                return $hasil->result();    	
	}
     
}
?>