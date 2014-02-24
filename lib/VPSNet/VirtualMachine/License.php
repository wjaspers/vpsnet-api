<?php

namespace VPSNet\VirtualMachine;

class License
{
	/**
	 * @var int
	 */
	protected $id;


	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}


	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}
}