<?php

namespace imooc;

class loader{

	public $router = null;

	public $config = null;

	public function __construct(){

		$this->router = register::get('router');

		$this->config = register::get('config');

	}

	/**
	 * [library description]
	 * @param  [type] $class [description]
	 * @param  [type] $path  [description]
	 * @return [type]        [description]
	 */
	public function library($library,$path = null,$prefix = 'library'){
		$class = $prefix.'\\'.$library;
		return new $class;
	}

	/**
	 * [view description]
	 * @param  [type] $template [description]
	 * @param  [type] $path     [description]
	 * @return [type]           [description]
	 */
	public function view($data = [],$suffix = 'html',$path = null){

		include BASEDIR.DIRECTORY_SEPARATOR.'template'.DIRECTORY_SEPARATOR.$this->router->module.DIRECTORY_SEPARATOR.$this->router->class.DIRECTORY_SEPARATOR.$this->router->method.'.'.$suffix;
		
	}

	/**
	 * [model description]
	 * @return [type] [description]
	 */
	public function model(){

		switch ($this->config['database']['master']['dbdriver']) {
			case 'mysqli':
				return database\mysqli::connect($this->config['database']['master']['hostname'],$this->config['database']['master']['username'],$this->config['database']['master']['password']);
				break;
			
			default:
				echo '暂时没有其他数据库支持';
				break;
		}

		
	}

	
}