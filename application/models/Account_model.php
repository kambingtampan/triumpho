<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Account_model extends CI_Model{

		function register($data){
			$this->db->insert('email',$data);
		}
	}
?>