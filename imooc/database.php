<?php

namespace imooc;

interface database{

	public function query($sql);

	public function delete();

	public function insert();

	public function close();

	public function limit();

	public function order();

	public function field();

}