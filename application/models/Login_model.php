<?php
	defined('BASEPATH') or exit ('No direct script access allowed');

	class Login_model{
		var $CI=NULL;

		public function __construct(){
			$this->CI=& get_instance();
		}

		public function login($email, $password){
			$query = $this->CI->db->get_where('email'=>$email,'password'=>md5($password))

			if($query->num_rows()==1){
				$row = $this->CI->db->query('SELECT email from account_register where email ="'.$email.'"');
				$admin = $row->row();
				$id = $admin->email;

				
			}
		}
	}
?>