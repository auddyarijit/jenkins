<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Email_model');
  }
  
  // Register
  public function index()
  {
    $data['title'] = 'Register - Tech Arise';
    $data['metaDescription'] = 'Register';
    $data['metaKeywords'] = 'Register';
    $this->load->view('header');
    $this->load->view('about', $data);
    $this->load->view('footer');
  }

  
  
  public function actionemail()
  {

   
     $message = $this->input->post('message');
    

    $data = array(
                                  
              'message'=>$message,            
                         
               );  

          $insert_id = $this->db->insert('email', $data);
          $insert_id = $this->db->insert_id();  
          //print_r($this->db->last_query());
               
          //$this->load->model('Email_model');         
          

          //$last_ins_id=$this->Email_model->email_user($saveData);
            
      redirect('index');


    }
  }

