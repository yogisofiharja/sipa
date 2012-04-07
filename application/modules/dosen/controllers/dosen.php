<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('mod_dosen', '', true);
    }
	
	
	function index()
	{
		$data['list_dosen'] = $this->mod_dosen->selectAllDosen()->result();
		$this->load->view('index', $data);
	}
	
	
	function showFormAddDosen(){
		$this->load->view('formAddDosen');
	}
	
	function addDosen(){
		echo "berhasil tambah dosen";
		
		$data['nip'] = $this->input->post('nip', true);
		$data['nama'] = $this->input->post('nama', true);
		$data['alamat'] = $this->input->post('alamat', true);
		$data['no_telp'] = $this->input->post('telepon', true);
		$data['email'] = $this->input->post('email', true);
		$data['golongan'] = $this->input->post('golongan', true);
		$data['tempat_lahir'] = $this->input->post('tempat_lahir', true);
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir', true);

		$this->mod_dosen->addDosen($data);
		redirect(site_url('dosen'), 'refresh');
 	}
	
	function showFormUpdateDosen($id){
		$data['dosen'] = $this->mod_dosen->selectDosenById($id)->row();
		$this->load->view('formEditDosen', $data);
	}
	
	function updateDosen(){
		$data['nip'] = $this->input->post('nip', true);
		$data['nama'] = $this->input->post('nama', true);
		$data['alamat'] = $this->input->post('alamat', true);
		$data['no_telp'] = $this->input->post('telepon', true);
		$data['email'] = $this->input->post('email', true);
		$data['golongan'] = $this->input->post('golongan', true);
		$data['tempat_lahir'] = $this->input->post('tempat_lahir', true);
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir', true);
		$id_dosen = $this->input->post('id_dosen', true);
		
		$this->mod_dosen->updateDosen($data, $id_dosen);
		redirect(site_url('dosen'), 'refresh');
	}
	
	function deleteDosen($id){
		// echo "berhasil delete dosen dengan id : ".$id;
		$this->mod_dosen->deleteDosen($id);
		redirect(site_url('dosen'), 'refresh');
 	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
