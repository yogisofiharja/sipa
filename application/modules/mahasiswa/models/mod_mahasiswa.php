<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mod_mahasiswa extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	function selectAllMahasiswa(){
		$this->db->select('*');
		$this->db->from('mahasiswa');
		
		return $this->db->get();
	}
	
	function selectMahasiswaById($id){
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('id_mahasiswa', $id);
		
		return $this->db->get();
	}
	
    function addMahasiswa($data){
		$this->db->insert('mahasiswa', $data);
	}
	
	function updateMahasiswa($data, $id_mahasiswa){
		$this->db->where('id_mahasiswa', $id_mahasiswa);
        $this->db->update('mahasiswa', $data);
	}
	
	function deleteMahasiswa($id){
		$this->db->where('id_mahasiswa', $id);
        $this->db->delete('mahasiswa');
	}
}
