<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Last_model extends CI_Model{

    //getting users per page

  function save($data){
	$this->db->insert('see',$data);
	return true;
   }
}
?>
