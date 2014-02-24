<?php

namespace VPSNet;

abstract class Node
{
	/**
	 * @var int
	 */
	protected $id;


	/**
	 * @var bool
	 */
	protected $isDiscount;


	/**
	 * @var bool
	 */
	protected $isFree;


	/**
	 * @param int $id
	 * @return Node
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
	 * @param boolean $isDiscount
	 * @return Node
	 */
	public function setIsDiscount($isDiscount)
	{
		$this->isDiscount = $isDiscount;
		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getIsDiscount()
	{
		return $this->isDiscount;
	}


	/**
	 * @param boolean $isFree
	 * @return Node
	 */
	public function setIsFree($isFree)
	{
		$this->isFree = $isFree;
		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getIsFree()
	{
		return $this->isFree;
	}


	/**
	 * @return string
	 */
	abstract public function getType();
}

