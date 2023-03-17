<?php
 
 
class Add_model extends CI_Model{

	public function getAllBooks(){
		$books = $this->db->get('books')->result();
		return $books;
	}

	public function storeProduct($data){
		$this->db->insert('books',$data);
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
