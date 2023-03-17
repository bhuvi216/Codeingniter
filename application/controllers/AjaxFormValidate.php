<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AjaxFormValidate extends CI_Controller {


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function index()
   {
      $this->load->view('ajax_form_validate');
   }


   /**
    * Validate and store the form data.
    *
    * @return Response
   */
   public function validateForm()
   {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');


        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }else{
           echo json_encode(['success'=>'Form submitted successfully.']);
        }
    }
}
