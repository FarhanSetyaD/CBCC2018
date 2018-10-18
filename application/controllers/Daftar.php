<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->library('email');
		$this->load->library('upload');
		$this->load->helper(array('form'));
	}

	public function index()
	{
		$this->load->view('V_daftar');		
	}

	function sendEmail($email1, $unikID, $nama1){
		$from	= "pendaftaran@creatonomics.id";
		$subject= "Creatonomics Business Creative Competition (CBCC)";
		$message= "Hi ".$nama1."\r\nTerimakasih telah mendaftar sebagai peserta Creatonomics Business Creative Competition (CBCC). Harap simpan Id pendaftaran dibawah ini, untuk keperluan daftar ulang jika tim kamu dinyatakan lolos oleh tim juri.\r\n \r\n ID PENDAFTARAN : #".$unikID."\r\n \r\n{unwrap}http://www.creatonomics.id{/unwrap} \r\n \r\n Creatonomics 2018.";
		
		$config = Array(
		     'protocol'	 => 'smtp',
		     'smtp_host' => 'mail.creatonomics.id',
		     'smtp_port' => 465,
		     'smtp_user' => 'pendaftaran@creatonomics.id',
		     'smtp_pass' => 'pendaftaran2017',
		     'mailtype'  => 'text',
		     'charset'   => 'iso-8859-1',
		     'wordwrap'	 => FALSE,
		 );
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		
		$this->email->from($from, 'Creatonomics');
		$this->email->to($email1);
		$this->email->subject($subject);
		$this->email->message($message);
		$result = $this->email->send();
		print_r($result);
	}
	
	function tambah_aksi(){
		$site_key = '6Ld0-0wUAAAAAM3xnJQGVwNJFfRsQ2q-rAkGcdal'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
    	$secret_key = '6Ld0-0wUAAAAAHw3BUjv5Zu9EyehJFGWfy67NKs5'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki

	    if (isset($_POST['submit']))
	    {

	        if(isset($_POST['g-recaptcha-response']))
	        {
	            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
	            $response = file_get_contents($api_url);
	            $data = json_decode($response, true);



	            if($data['success'])
	            {
	                $comment = $_POST['submit'];
	                $nama_tim = $this->input->post('NAMA_TIM');
					$univ = $this->input->post('UNIV');
					$nama_bisnis = $this->input->post('NAMA_BISNIS');
					$bidang_bisnis = $this->input->post('BIDANG_BISNIS');
					$link_video = $this->input->post('LINK_VIDEO');
					$deskrip = $this->input->post('DESKRIP');
					// $foto1 = $this->input->post('FOTO1');
					// $foto2 = $this->input->post('FOTO2');
					// $foto3 = $this->input->post('FOTO3');
					// $ktp1 = $this->input->post('KTP1');
					// $ktp2 = $this->input->post('KTP2');
					// $ktp3 = $this->input->post('KTP3');
					// $ktm1 = $this->input->post('KTM1');
					// $ktm2 = $this->input->post('KTM2');
					// $ktm3 = $this->input->post('KTM3');
					$nama1 = $this->input->post('NAMA1');
					$nama2 = $this->input->post('NAMA2');
					$nama3 = $this->input->post('NAMA3');
					$ttl1 = $this->input->post('TTL1');
					$ttl2 = $this->input->post('TTL2');
					$ttl3 = $this->input->post('TTL3');
					$email1 = $this->input->post('EMAIL1');
					$email2 = $this->input->post('EMAIL2');
					$email3 = $this->input->post('EMAIL3');
					$hp1 = $this->input->post('HP1');
					$hp2 = $this->input->post('HP2');
					$hp3 = $this->input->post('HP3');
					$line1 = $this->input->post('LINE1');
					$line2 = $this->input->post('LINE2');
					$line3 = $this->input->post('LINE3');

					$folder		= "./assets/team/".$nama_tim;
					if (!file_exists($folder)) {
						mkdir($folder, 0777, true);
					}
					//upload file KTM ketua
					$a = explode(".", $_FILES["KTM1"]["name"]);
					$extensi1 = end($a);
					$temp = $_FILES['KTM1']['tmp_name'];
					$ktm1 = "KTM_KETUA_".$nama1.".".$extensi1;
					move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/assets/team/".$nama_tim."/".$ktm1);

					//upload file KTP ketua
					$b = explode(".", $_FILES["KTP1"]["name"]);
					$extensi2 = end($b);
					$temp = $_FILES['KTP1']['tmp_name'];
					$ktp1 = "KTP_KETUA_".$nama1.".".$extensi2;
					move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/assets/team/".$nama_tim."/".$ktp1);

					//upload file FOTO ketua
					$c = explode(".", $_FILES["FOTO1"]["name"]);
					$extensi3 = end($c);
					$temp = $_FILES['FOTO1']['tmp_name'];
					$foto1 = "FOTO_KETUA_".$nama1.".".$extensi3;
					move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/assets/team/".$nama_tim."/".$foto1);




					//upload file KTM anggota 1
					$d = explode(".", $_FILES["KTM2"]["name"]);
					$extensi4 = end($d);
					$temp = $_FILES['KTM2']['tmp_name'];
					$ktm2 = "KTM_ANGGOTA1_".$nama2.".".$extensi4;
					move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/assets/team/".$nama_tim."/".$ktm2);

					//upload file KTP anggota 1
					$e = explode(".", $_FILES["KTP2"]["name"]);
					$extensi5 = end($e);
					$temp = $_FILES['KTP2']['tmp_name'];
					$ktp2 = "KTP_ANGGOTA1_".$nama2.".".$extensi5;
					move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/assets/team/".$nama_tim."/".$ktp2);

					//upload file FOTO anggota 1
					$f = explode(".", $_FILES["FOTO2"]["name"]);
					$extensi6 = end($f);
					$temp = $_FILES['FOTO2']['tmp_name'];
					$foto2 = "FOTO_ANGGOTA1_".$nama2.".".$extensi6;
					move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/assets/team/".$nama_tim."/".$foto2);




					//upload file KTM anggota 2
					$g = explode(".", $_FILES["KTM3"]["name"]);
					$extensi7 = end($g);
					$temp = $_FILES['KTM3']['tmp_name'];
					$ktm3 = "KTM_ANGGOTA2_".$nama3.".".$extensi7;
					move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/assets/team/".$nama_tim."/KTM_ANGGOTA2_".$nama3.".".$extensi7);

					//upload file KTP anggota 2
					$h = explode(".", $_FILES["KTP3"]["name"]);
					$extensi8 = end($h);
					$temp = $_FILES['KTP3']['tmp_name'];
					$ktp3 = "KTP_ANGGOTA2_".$nama3.".".$extensi8;
					move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/assets/team/".$nama_tim."/KTP_ANGGOTA2_".$nama3.".".$extensi8);

					//upload file FOTO anggota 2
					$i = explode(".", $_FILES["FOTO3"]["name"]);
					$extensi9 = end($i);
					$temp = $_FILES['FOTO3']['tmp_name'];
					$foto3 = "FOTO_ANGGOTA2_".$nama3.".".$extensi9;
					move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/assets/team/".$nama_tim."/FOTO_ANGGOTA2_".$nama3.".".$extensi9);
					
					//ngambil data last index
					$lastt = $this->db->select('ID_TIM')->order_by('ID_TIM','desc')->limit(1)->get('db_peserta')->row('ID_TIM')+1;
            	    $nt = sprintf("%04d", $lastt);
            	    $unikID = $nt.date('dm');
            	   
					
					
					$data = array(
						'NAMA_TIM' => $nama_tim,
						'ID_UNIQUE' => $unikID,
						'UNIV' => $univ,
						'NAMA_BISNIS' => $nama_bisnis,
						'BIDANG_BISNIS' => $bidang_bisnis,
						'LINK_VIDEO' => $link_video,
						'DESKRIP' => $deskrip,
						'FOTO1' => $foto1,
						'FOTO2' => $foto2,
						'FOTO3' => $foto3,
						'KTP1' => $ktp1,
						'KTP2' => $ktp2,
						'KTP3' => $ktp3,
						'KTM1' => $ktm1,
						'KTM2' => $ktm2,
						'KTM3' => $ktm3,
						'NAMA1' => $nama1,
						'NAMA2' => $nama2,
						'NAMA3' => $nama3,
						'TTL1' => $ttl1,
						'TTL2' => $ttl2,
						'TTL3' => $ttl3,
						'EMAIL1' => $email1,
						'EMAIL2' => $email2,
						'EMAIL3' => $email3,
						'HP1' => $hp1,
						'HP2' => $hp2,
						'HP3' => $hp3,
						'LINE1' => $line1,
						'LINE2' => $line2,
						'LINE3' => $line3
						);
					$this->M_data->input_data($data,'db_peserta');
					$this->sendEmail($email1, $unikID, $nama1);
	                $success = true;
	            }
	            else
	            {
	                $success = false;
	            }
	        }
	        else
	        {
	            $success = false;
	        }
	    };

	    if (isset($success)) {
             
                if ($success==true) { 
                	echo '<script>alert("Selamat Anda telah terdafta dalam CBCC, check email anda, dan tunggu pengunguman selanjutnya ya :D")</script>';
                	redirect(base_url(),'refresh');
                } else {
                	echo '<script>alert("salah captcha")</script>';
                } 
            };
	}

	

}

/* End of file daftar.php */
/* Location: ./application/controllers/daftar.php */