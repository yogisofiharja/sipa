<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends MX_Controller {

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
        $this->load->model('mod_mahasiswa', '', true);
    }
	
	
	function index()
	{
		$data['list_mahasiswa'] = $this->mod_mahasiswa->selectAllMahasiswa()->result();
		$this->load->view('index', $data);
	}
	
	
	function showFormAddMahasiswa(){
		$this->load->view('formAddMahasiswa');
	}
	
	function addMahasiswa(){
		$data['nim'] = $this->input->post('nim', true);
		$data['nama'] = $this->input->post('nama', true);
		$data['alamat'] = $this->input->post('alamat', true);
		$data['no_telp'] = $this->input->post('telepon', true);
		$data['email'] = $this->input->post('email', true);
		$data['tempat_lahir'] = $this->input->post('tempat_lahir', true);
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir', true);

		$this->mod_mahasiswa->addMahasiswa($data);
		redirect(site_url('mahasiswa'), 'refresh');
 	}
	
	function showFormUpdateMahasiswa($id){
		$data['mahasiswa'] = $this->mod_mahasiswa->selectMahasiswaById($id)->row();
		$this->load->view('formEditMahasiswa', $data);
	}
	
	function updateMahasiswa(){
		$data['nim'] = $this->input->post('nim', true);
		$data['nama'] = $this->input->post('nama', true);
		$data['alamat'] = $this->input->post('alamat', true);
		$data['no_telp'] = $this->input->post('telepon', true);
		$data['email'] = $this->input->post('email', true);
		$data['tempat_lahir'] = $this->input->post('tempat_lahir', true);
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir', true);
		$id_mahasiswa = $this->input->post('id_mahasiswa', true);
		
		$this->mod_mahasiswa->updateMahasiswa($data, $id_mahasiswa);
		redirect(site_url('mahasiswa'), 'refresh');
	}
	
	function deleteMahasiswa($id){
		// echo "berhasil delete mahasiswa dengan id : ".$id;
		$this->mod_mahasiswa->deleteMahasiswa($id);
		redirect(site_url('mahasiswa'), 'refresh');
 	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
