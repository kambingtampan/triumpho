<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model{
	private $_table = "account_register";

	public $name_first;
	public $name_last;
	public $email;
	public $password;
	public $password_conf;

	public function rules(){
		return [
			[	'field' => 'name_first',
				'label' => 'Name_first',
				'rules' => 'required'
			],
			[	'field' => 'email',
				'label' => 'Email',
				'rules' => 'email'
			],
			[	'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			],
			[	'field' => 'password_conf',
				'label' => 'Password_conf',
				'rules' => 'required'
			],
		]
	}

	public
}