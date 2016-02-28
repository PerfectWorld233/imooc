<?php

namespace imooc;

class application{

	static public function instance(){
		
		spl_autoload_register('imooc\application::autoload');

		include BASEDIR.DIRECTORY_SEPARATOR.'imooc'.DIRECTORY_SEPARATOR.'common.php';

		self::factory();

	}

	/**
	 * [autoload description]
	 * @param  [type] $class [description]
	 * @return [type]        [description]
	 */
	static public function autoload($class){

		require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';

	}

	/**
	 * [factory description]
	 * @return [type] [description]
	 */
	static public function factory(){

		$classes = include BASEDIR.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'class.php';

		foreach ($classes as $key => $value) {
			$object = new $value;
			register::set($key,$object);
		}

	}

}