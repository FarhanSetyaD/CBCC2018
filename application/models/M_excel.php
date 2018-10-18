<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class M_excel extends CI_Model {
 
      //constructor untuk class M_excel
      public function __construct(){
           //load constructor CI_Model
           parent::__construct();
 
           //load database
           $this->load->database();
      }
 
      // ambil data dari tabel 'db_peserta'
      public function getAll() {
           $this->db->select('*');
           $this->db->from('db_peserta');
           $query = $this->db->get();
           return $query->result();
      }
 
 }
 
 /* End of file M_excel.php */
 /* Location: ./application/models/M_excel.php */