<?php 

class Ccrud extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_excel');
		$this->load->model('M_informasi');
	}

	function index(){
	    if($this->session->userdata('status') != "logged in"){
			redirect(base_url('index.php/Wakwaw'));
		}
		else{
		    $data['informasi'] = $this->M_informasi->tampil_data()->result();
		    $data['peserta'] = $this->M_data->tampil_data()->result();
		    $this->load->view('V_admin',$data);
		}

	}

	//fungsi untuk lihat detail data peserta
	function detail($id){
		if($this->session->userdata('status') != "logged in"){
			redirect(base_url('index.php/Wakwaw'));
		}
		else{
			$where = array('ID_TIM' => $id);
		    $data['peserta'] = $this->M_data->detail_data($where,'db_peserta')->result();
		    $this->load->view('V_admin_detail',$data);
		}
	}

	function tambah(){
		$this->load->view('V_daftar');
		
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->M_data->hapus_data($where,'user');
		redirect('Ccrud/index');
	}
	
	function export_excel(){
		$data = array( 'title' => 'Data peserta',
        'peserta' => $this->M_excel->getAll());
        $this->load->view('V_excel',$data);
	}
	
	function cetak_unique(){
        $this->M_data->tampil_unique();
	}
	
// 	function edit($id){
// 		$where = array('id' => $id);
// 		$data['user'] = $this->M_data->edit_data($where,'db_peserta')->result();
// 		$this->load->view('V_admin',$data);
// 	}
// 	function update(){
// 		$id = $this->input->post('id');
// 		$nama = $this->input->post('nama');
// 		$alamat = $this->input->post('alamat');
// 		$pekerjaan = $this->input->post('pekerjaan');
	 
// 		$data = array(
// 			'nama' => $nama,
// 			'alamat' => $alamat,
// 			'pekerjaan' => $pekerjaan
// 		);
	 
// 		$where = array(
// 			'id' => $id
// 		);
	 
// 		$this->M_data->update_data($where,$data,'user');
// 		redirect('Ccrud/index');
// 	}
// 	function index_up()
// 	{
// 		$this->load->view('v_upload', array('error' => ' ' ));
// 	}
// 	function aksi_upload(){
// 		$config['upload_path']          = './gambar/';
// 		$config['allowed_types']        = 'gif|jpg|png';
// 		$config['max_size']             = 100;
// 		$config['max_width']            = 1024;
// 		$config['max_height']           = 768;
 
// 		$this->load->library('upload', $config);
 
// 		if ( ! $this->upload->do_upload('berkas')){
// 			$error = array('error' => $this->upload->display_errors());
// 			$this->load->view('v_upload', $error);
// 		}else{
// 			$data = array('upload_data' => $this->upload->data());
// 			$this->load->view('v_upload_sukses', $data);
// 		}
// 	}
}