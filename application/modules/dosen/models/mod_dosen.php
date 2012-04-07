<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mod_dosen extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	function selectAllDosen(){
		$this->db->select('*');
		$this->db->from('dosen');
		
		return $this->db->get();
	}
	
	function selectDosenById($id){
		$this->db->select('*');
		$this->db->from('dosen');
		$this->db->where('id_dosen', $id);
		
		return $this->db->get();
	}
	
    function addDosen($data){
		$this->db->insert('dosen', $data);
	}
	
	function updateDosen($data, $id_dosen){
		$this->db->where('id_dosen', $id_dosen);
        $this->db->update('dosen', $data);
	}
	
	function deleteDosen($id){
		$this->db->where('id_dosen', $id);
        $this->db->delete('dosen');
	}
}
