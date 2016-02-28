<?php

namespace imooc;

class output{

	public $router = null;

	public function __construct(){
		
		$this->router = register::get('router');

		$this->dispatch();

	}

	public function dispatch(){

		$class = 'app\\'.$this->router->module.'\\'.$this->router->class;

		$object = new $class;

		$method = $this->router->method;

		$object->$method();
	}

}