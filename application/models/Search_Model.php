<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model{

    //getting users per page

   function signin($data){
	$this->db->insert('backenduser',$data);
	$this->db->insert= "INSERT INTO table (backendusers) VALUES(".$this->db->backendusers($data).")";
	return true;
   }
}
?>
