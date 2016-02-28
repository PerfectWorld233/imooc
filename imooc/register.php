<?php

namespace imooc;

class register{

	static public $map = array();

	/**
	 * [get description]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	static public function get($key){

		if(!isset(self::$map[$key])){
            return false;
        }
        
        return self::$map[$key];
	}

	/**
	 * [set description]
	 * @param [type] $key   [description]
	 * @param [type] $value [description]
	 */
	static public function set($key,$value){

		self::$map[$key] = $value;

	}

	/**
	 * [_unset description]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	static public function _unset($key){

		unset(self::$map[$alias]);

	}
}