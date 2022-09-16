<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Employee_model');
  }
  
  
  public function index()
  {
    $data['title'] = 'Register - Tech Arise';
    $data['metaDescription'] = 'Register';
    $data['metaKeywords'] = 'Register';
    
    $this->load->view('header');
    $this->load->view('registration', $data);
    $this->load->view('footer');
  }
  
  public function actionRegister()
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

    
   

    $firstname = $this->input->post('firstname');
    $lastname = $this->input->post('lastname');
    $mobile_no = $this->input->post('mobile_no');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $address = $this->input->post('address');
    $image = $this->input->post('image');
    
    $saveData=array(
                           
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'mobile_no'=>$mobile_no,
                'email'=>$email,
                'Password'=>$password,
                'address'=>$address,
                'image'=>$image,

                
                    
                );
                
          $this->load->model('Employee_model');         
          $last_ins_id=$this->Employee_model->register_user($saveData);
            
      redirect('Registration');


    }
  }

