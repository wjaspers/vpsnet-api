<?php

namespace VPSNet\Cloud;


class Cloud
{
	/**
	 * @var int
	 */
	protected $id;


	/**
	 * @var string
	 */
	protected $label;


	/**
	 * @param string $label
	 */
	public function __construct($label = '')
	{
		$this->label = $label;
	}


	/**
	 * @param int $id
	 *
	 * @return $this
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}


	/**
	 * @param string $label
	 * @return Cloud
	 */
	public function setLabel($label)
	{
		$this->label = $label;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
	}
}