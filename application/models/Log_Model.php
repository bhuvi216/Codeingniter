<?php
 
 
class Log_Model extends CI_Model{

	public function getAllLogin(){
		$login = $this->db->get('backendusers')->result();
		return $login;
	}

	public function storeProduct($data){
		$this->db->insert('backendusers',$data);
	}

	public function getLogin($id){
		return $this->db->where('id',$id)->get('backendusers')->row();
	}
}
