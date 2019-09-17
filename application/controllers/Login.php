<?php
 	defined('BASEPATH') OR exit('No direct script access allowed');
 
 	class Login extends CI_Controller {
 
    	public function index() {
         $valid = $this->form_validation;
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $valid->set_rules('username','Username','required');
         $valid->set_rules('password','Password','required');
 
         if($valid->run()==TRUE) {
            $this->login_lib->login($username,$password, base_url('dashboard'), base_url('main'));
         }
         $this->load->view('account/main');
     }
 
     public function logout(){
         $this->login_lib->logout();
     }        
 }
?>