<?php

namespace imooc;

class controller{
	
	public $load = null;

	public function __construct(){

		$this->load = register::get('loader');

	}

	/**
	 * [success description]
	 * @param  [type] $url [description]
	 * @param  [type] $msg [description]
	 * @return [type]      [description]
	 */
	public function success($msg,$url){

	}

	/**
	 * [error description]
	 * @param  [type] $msg [description]
	 * @return [type]      [description]
	 */
	public function error($msg){

	}

	
}