<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Contact_model');
  }
  
  // Register
  public function index()
  {
    $data['title'] = 'Register - Tech Arise';
    $data['metaDescription'] = 'Register';
    $data['metaKeywords'] = 'Register';
    $this->load->view('header');
    $this->load->view('contact', $data);
    $this->load->view('footer');
  }

  
  
  public function actioncontact()
  {

    /*$this->load->library('form_validation');*/
    // field name, error message, validation rules
    

    /*$this->form_validation->set_rules('firstname', 'firstName', 'required');
    $this->form_validation->set_rules('lastname', 'lastName', 'required');
    $this->form_validation->set_rules('mobile_no', 'mobile_no', 'trim|required|min_length[10]');
    $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    $this->form_validation->set_rules('address', 'address', 'trim|required|matches[password]');
    $this->form_validation->set_rules('image', 'image', 'trim|required|matches[password]');*/

    
   

    $name = $this->input->post('name');
    $phone = $this->input->post('phone');
    $email = $this->input->post('email');
    $business = $this->input->post('business');
    $message = $this->input->post('message');
    //die();
    $saveData=array(
                           
                'name'=>$name,
                'phone'=>$phone,
                'email'=>$email,
                'department'=>$business,
                'message'=>$message,
                  
                );
                
          //$this->load->model('Contact_model');         
          $last_ins_id=$this->Contact_model->register_user($saveData);
            
      redirect('Contact');


    }
  }

