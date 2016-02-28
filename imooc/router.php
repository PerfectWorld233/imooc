<?php

namespace imooc;

class router{

	public $module = null;

	public $class  = null;

	public $method = null;

	public $uri = null;

	public $query = null;

	public $script_name = null;

	public $self = null;

	public $config = array();

	public $segment = null;

	public function __construct(){
		
		$this->uri = $_SERVER['REQUEST_URI'];

		$this->query = $_SERVER['QUERY_STRING'];

		$this->script_name = $_SERVER['SCRIPT_NAME'];

		$this->self = $_SERVER['PHP_SELF'];

		$this->config = register::get('config');

		$this->_parse_url();

	}

	/**
	 * [_parse_url description]
	 * @return [type] [description]
	 */
	public function _parse_url(){

		if($this->uri == '/' || $this->script_name == $this->self){

			$this->module = $this->config['routes']['module'];

			$this->class = $this->config['routes']['controller'];

			$this->method = $this->config['routes']['method'];

			return ;

		}

		$this->pathinfo = empty($_SERVER['PATH_INFO']) ? substr($this->uri,strlen($this->script_name)) : $_SERVER['PATH_INFO'];

		$pathinfo = explode('/', trim($this->pathinfo,'/'));

		$this->module = $pathinfo[0];

		$this->class  = empty($pathinfo[1]) ? $this->config['routes']['controller'] : $pathinfo[1];

		$this->method = empty($pathinfo[2]) ? $this->config['routes']['method'] : $pathinfo[2];

		$this->segment = array_slice($pathinfo, 3);

	}
}