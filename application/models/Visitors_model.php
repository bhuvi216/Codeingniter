<?php
 
 
class Visitors_model extends CI_Model{

	public function getAllVisitors(){
		$visitors = $this->db->get('visitors')->result();
		return $visitors;
	}

	public function storeProduct($data){
		$this->db->insert('visitors',$data);
	}

	public function getVisitors($id){
		return $this->db->where('id',$id)->get('visitors')->row();
	}

	public function updateProduct($id,$data){
		$this->db->where('id',$id)->update('visitors',$data);
	}

	public function visitorsdeleteProduct($id){
		$this->db->where('id',$id)->delete('visitors');
	}
}

?>
