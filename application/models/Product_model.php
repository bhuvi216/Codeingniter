<?php
class Product_model extends CI_Model{

	function get_all_products(){
		$result=$this->db->get('product');
		return $result;
	}
	
}
