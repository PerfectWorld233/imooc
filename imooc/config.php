<?php

namespace imooc;

class config implements \arrayaccess{

	protected $path = null;

    protected $configs = array();

    public function __construct(){

        $this->path = BASEDIR.DIRECTORY_SEPARATOR.'config';
    }

    /**
     * [offsetGet description]
     * @param  [type] $key [description]
     * @return [type]      [description]
     */
    public function offsetGet($key){

        if (empty($this->configs[$key]))
        {
            $file_path = $this->path.'/'.$key.'.php';
            $config = require $file_path;
            $this->configs[$key] = $config;
        }
        return $this->configs[$key];
    }

    /**
     * [offsetSet description]
     * @param  [type] $key   [description]
     * @param  [type] $value [description]
     * @return [type]        [description]
     */
    public function offsetSet($key, $value){

        $this->configs[$key] = $value;
    }

    /**
     * [offsetExists description]
     * @param  [type] $key [description]
     * @return [type]      [description]
     */
    public function offsetExists($key){

        return isset($this->configs[$key]);
    }

    /**
     * [offsetUnset description]
     * @param  [type] $key [description]
     * @return [type]      [description]
     */
    public function offsetUnset($key){

        unset($this->configs[$key]);
    }


}