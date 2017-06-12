<?php 
/**
* 
*/
class Kho_models extends CI_model
{
	function add($data){
		$query = $this->db->insert('tb_xuatkho',$data);
		if($query){
			$id_xuatkho = $this->db->select_max('id_xuatkho');
			$query = $this->db->get('tb_xuatkho');
			if($query){
				return $query->result();
			}
		}
	}
	function add_detail($data){
		$query = $this->db->insert('tb_chitietxuat',$data);
		return true;
	}
	
}

 ?>