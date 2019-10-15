<?php

class Doc_mgt extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view competitor_mov
        $this->load->view("doc_mgt/doc_mgt");
	}
}