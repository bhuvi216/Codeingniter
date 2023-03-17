<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->model('product_model');
	}

	public function index()
	{	
		$data['product']  = $this->product_model->getAllProducts();
		$data['title'] = "Product List";
		$this->load->view('index',$data);
	}

	public function create(){
		$data['title'] = "Create Product";
		$this->load->view('create',$data);
	}

	public function storeProduct(){
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');

		$this->product_model->storeProduct($data);
		redirect('product');
	}

	public function edit($id){
		$data['product'] = $this->product_model->getProduct($id);
		$data['title'] = "Edit Product";
		$this->load->view('edit',$data);
	}

	public function updateProduct($id){
		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');

		$this->product_model->updateProduct($id,$data);
		redirect('product');
	}

	public function delete($id){
		$this->product_model->deleteProduct($id);
		redirect('product');
	}
}
?>
