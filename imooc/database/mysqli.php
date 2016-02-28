<?php

namespace imooc\database;

use imooc\register;

use imooc\database;

class mysqli implements database{

	private static $instance = null;

	/**
	 * [__construct description]
	 * @param [type] $host   [description]
	 * @param [type] $user   [description]
	 * @param [type] $passwd [description]
	 */
	private function __construct($host,$user,$passwd){

		$this->config = register::get('config');

		static::$instance = new \mysqli($host,$user,$passwd);

	}

	/**
	 * [connect description]
	 * @param  [type] $host   [description]
	 * @param  [type] $user   [description]
	 * @param  [type] $passwd [description]
	 * @return [type]         [description]
	 */
	public static function connect($host,$user,$passwd){

		if (!(self::$instance instanceof self))  
        {  
            self::$instance = new self($host,$user,$passwd);  
        }  
        return self::$instance;  

	}

	public function query($sql){

	}

	public function delete(){

	}

	public function insert(){

	}

	public function close(){

	}

	public function limit(){

	}

	public function order(){

	}

	public function field(){

	}

	/**
	 * [__clone description]
	 * @return [type] [description]
	 */
	private function __clone(){

	}

	public function __destruct(){
		static::$instance->close();
	}


}