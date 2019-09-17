<?php 
	defined('BASEPATH')or exit('No direct script access allowed');

	class Register extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->library(array('form_validation'));
			$this->load->helper(array('url','form'));
			$this->load->model('Account_model');
		}

		public function index(){
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==FALSE){
				$this->load->view('account/register');
			}else{
				$data['name'] = $this->input->post('name');
				$data['username'] = $this->input->post('username');
				$data['email'] = $this->input->post('email');
				$data['password'] = md5($this->input->post('password'));

				$this->Account_model->register($data);

				$pesan['message'] = 'Registration Success';

				$this->load->view('account/main',$pesan);
			}
		}
	}

?>