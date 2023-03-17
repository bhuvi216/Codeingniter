<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
			$this->load->model('Add_model');
			$this->load->model('View_Model');
			$this->load->model('Visitors_model');
			$this->load->model('Visitors_model');
			$this->load->model('Check_model');
		}

		public function addblog()
	{	
		$data['books']  = $this->Add_model->getAllBooks();
		$data['name of the books'] = "Books List";
		$data['author'] = "Books List";
		$data['no.of books'] = "Books List";
		$this->load->view('adminpanel/addblog',$data);
	}	
	public function create(){
		$data['title'] = "Create Books";
		$this->load->view('adminpanel/create',$data);
	}	
	public function storeProduct(){
		$data['title'] = $this->input->post('title');
		$data['author'] = $this->input->post('author');

		$this->Add_model->storeProduct($data);
		redirect('addblog');
	}	
	public function edit($id){
		$data['books'] = $this->Add_model->getBooks($id);
		$data['title'] = "Edit Books";
		$data['author'] = "Edit Author";
		
		$this->load->view('adminpanel/editblog',$data);
	}
	public function updateProduct($id){
		$data['title'] = $this->input->post('title');
		$data['author'] = $this->input->post('author');

		$this->Add_model->updateProduct($id,$data);
		redirect('admin/blog/addblog');
	}
	public function delete($id){
		$this->Add_model->deleteProduct($id);
		redirect('admin/blog/addblog');
	}
	
	
	
	public function viewbooks()
{	
	$data['books']  = $this->View_Model->viewgetAllBooks();
	$data['name of the books'] = "Books List";
	$data['author'] = "Books List";
	$data['no.of books'] = "Books List";
	$this->load->view('adminpanel/addblog',$data);
}	
public function viewcreate(){
	$data['title'] = "Create Books";
	$this->load->view('adminpanel/create',$data);
}	
public function viewstoreProduct(){
	$data['title'] = $this->input->post('title');
	$data['author'] = $this->input->post('author');

	$this->View_Model->storeProduct($data);
	redirect('addblog');
}	



	
	function visitorsblog(){
		$data['visitors']  = $this->Visitors_model->getAllVisitors();
		$data['visitorsname'] = "visitors List";
		$data['mailid'] = "visitors List";
		
		$this->load->view('visitors/visitors',$data);
	}	
	public function visitorcreate(){
		$data['visitorsname'] = "Create Visitors";
		$this->load->view('adminpanel/viewcreate',$data);
	}	
	public function visitorstoreProduct(){
		$data['visitors'] = $this->input->post('visitors');
		$data['mailid'] = $this->input->post('mailid');

		$this->Visitor_model->storeProduct($data);
		redirect('visitorcreate');
	}	
	public function visitoredit($id){
		$data['visitors'] = $this->Visitors_model->getVisitors($id);
		$data['visitorsname'] = "Edit Visitors";
		$data['mailid'] = "Edit mailid";
		
		$this->load->view('visitors/edit',$data);
	}
	public function visitorupdateProduct($id){
		$data['visitorsname'] = $this->input->post('visitorsname');
		$data['mailid'] = $this->input->post('mailid');

		$this->Visitors_model->visitorupdateProduct($id,$data);
		redirect('admin/blog/addblog');
	}
	public function visitordelete($id){
		$this->Visitors_model->visitorsdeleteProduct($id);
		redirect('admin/blog/visitorsblog');
	}
	
	
	
		
	
	function visitors_post(){
		echo "added";
	}
	
	function borrow(){
		$this->load->view('adminpanel/borrowed');
	}
	function check_blog(){
		
		
	}
	

	function addblog_post(){
		
	echo "added";
		

		
}

		


	

	function editblog_post(){
		//print_r($_POST); die();

	}
	
}




?>
