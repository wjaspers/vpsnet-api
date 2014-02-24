<?php

namespace VPSNet;

class Domain
{
	/**
	 * @var int
	 */
	protected $id;


	/**
	 * @var string
	 */
	protected $name;


	/**
	 * @var string
	 */
	protected $tld;


	/**
	 * @param int $id
	 * @return Domain
	 */
	public function setId($id)
	{
		$this->id = $id;
	}


	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}


	/**
	 * @param string $name
	 * @return Domain
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * @param string $tld
	 * @return Domain
	 */
	public function setTld($tld)
	{
		$this->tld = $tld;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getTld()
	{
		return $this->tld;
	}
}