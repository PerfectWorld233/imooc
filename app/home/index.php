<?php

namespace app\home;

use imooc\controller;

class index extends controller{

	public function __construct(){

		parent::__construct();

	}

	public function index(){

		$object = $this->load->model();
		
	}
	
}