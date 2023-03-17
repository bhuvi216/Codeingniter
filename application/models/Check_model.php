<?php
 
 
class Check_model extends CI_Model{

	public function getAllBooks(){
		$books = $this->db->get('issuebook')->result();
		return $books;
	}

	public function storeProduct($data){
		$this->db->insert('issuebook',$data);
	}

	public function getBooks($id){
		return $this->db->where('id',$id)->get('books')->row();
	}

	public function updateProduct($id,$data){
		$this->db->where('id',$id)->update('books',$data);
	}

	public function deleteProduct($id){
		$this->db->where('id',$id)->delete('books');
	}
}

?>
