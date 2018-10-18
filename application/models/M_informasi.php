<?php 
class M_informasi extends CI_Model{
	function tampil_data(){
		return $this->db->order_by('ID_INFO','DESC')->get('db_informasi');
	}
	function tampil_data_index(){
		return $this->db->limit(6)->order_by('ID_INFO','DESC')->get('db_informasi');

		//return $this->db->get_where('db_informasi', NULL, 6);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
		return $this->db->get('db_informasi');
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
}