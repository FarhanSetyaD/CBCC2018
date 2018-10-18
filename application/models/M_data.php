<?php 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('db_peserta');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
		return $this->db->get('db_peserta');
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function detail_data($where,$table){		
		return $this->db->get_where($table,$where);
	}	
}