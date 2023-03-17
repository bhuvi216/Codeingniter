<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Name extends CI_Controller {


	public function index(){
	$this->load->helper('url');
	$this->load->view('Home');
	$this->load->library('session');
	$this->load->database('see');
	
}
public function save(){
	$this->load->library('session');
	$this->load->database('see');
	
	
	$name=$this->input->post('name');
	
	$this->session->set_userdata('savename',$name);
	
	redirect('Name');

}
public function clear(){
	$this->session->unset_userdata('savename');
	redirect('Name');
}	
	
}
?>
