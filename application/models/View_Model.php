<?php
 
 
class View_Model extends CI_Model{

	public function viewgetAllBooks(){
		$books = $this->db->get('books')->result();
		return $books;
	}

	public function viewstoreProduct($data){
		$this->db->insert('books',$data);
	}

	public function viewgetBooks($id){
		return $this->db->where('id',$id)->get('books')->row();
	}

	public function viewupdateProduct($id,$data){
		$this->db->where('id',$id)->update('books',$data);
	}

	public function viewdeleteProduct($id){
		$this->db->where('id',$id)->delete('books');
	}
}

?>
