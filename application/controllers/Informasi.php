<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_informasi');
		$this->load->helper('url');
		$this->load->helper(array('url'));
	}

	public function index()
	{   
	    $data['informasi'] = $this->M_informasi->tampil_data()->result();
		$this->load->view('V_informasi',$data);
	}
 	
 	function tambah_aksi(){
		$judul = $this->input->post('JUDUL');
		$deskripsi = $this->input->post('DESKRIPSI');

		//upload Foto
        $poto = $_FILES['upload']['name'];
		$temp = $_FILES['upload']['tmp_name'];
		move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/assets/informasi/".$poto);
        
		$data = array(
			'JUDUL' => $judul,
			'FOTO' => $poto,
			'DESKRIPSI' => $deskripsi,
			'TANGGAL' => date('Y-m-d')

			);
		$this->M_informasi->input_data($data,'db_informasi');
		redirect('Ccrud/index');
	}
	
	function edit($id){
 		$where = array('ID_INFO' => $id);
 		$data['db_peserta'] = $this->M_informasi->edit_data($where,'db_informasi')->result();
 		$this->load->view('V_edit_info',$data);
 	}
 	
 	function hapus($id){
		$where = array('ID_INFO' => $id);
		$this->M_informasi->hapus_data($where,'db_informasi');
		redirect('Ccrud/index');
	}
 	
 	function update(){
		$id = $this->input->post('ID_INFO');
		$judul = $this->input->post('JUDUL');
		$deskripsi = $this->input->post('DESKRIPSI');
		//$foto = $this->input->post('FOTO');
	 
		$data = array(
			'JUDUL' => $judul,
			'DESKRIPSI' => $deskripsi,
			//'FOTO' => $foto
		);
		
		$where = array(
			'ID_INFO' => $id
		);
	 
		$this->M_informasi->update_data($where,$data,'db_informasi');
		redirect('Ccrud/index');
	}

}

/* End of file Informasi.php */
/* Location: ./application/controllers/Informasi.php */