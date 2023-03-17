<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Summary of Checkout
 */
class Checkout extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	
		public function __construct() {
			parent::__construct(); 
			
			$this->load->model('Checkout_model');
		}

		public function checks()
	{	
		$data['books']  = $this->Checkout_model->getAllBooks();
		$data['name of the books'] = "Books List";
		$data['author'] = "Books List";
		$data['no.of books'] = "Books List";
		$this->load->view('checkout/check',$data);
	}	
	public function create(){
		$data['title'] = "Create Books";
		$data['visitorsname'] = "Create Books";
		$this->load->view('adminpanel/creative',$data);
	}
	public function storeProduct(){
		$data['visitorsname'] = $this->input->post('visitorsname');
		$data['issusebooks'] = $this->input->post('issusebooks');
		

		$this->Check_model->storeProduct($data);
		redirect('admin/checkout');
	}	
	/**
	 * Summary of checkin
	 * @return void
	 */
	public function checkin(){
		$this->load->view('adminpanel/checkout');
		

		
	}
	

	}

