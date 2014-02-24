<?php

namespace VPSNet\DNS;

abstract class DnsRecord
{
	/**
	 * @var string
	 */
	protected $data;


	/**
	 * @var string
	 */
	protected $host;


	/**
	 * @var int
	 */
	protected $id;


	/**
	 * @var int
	 */
	protected $ttl;


	/**
	 * @param string $data
	 * @return DnsRecord
	 */
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getData()
	{
		return $this->data;
	}


	/**
	 * @param string $host
	 * @return DnsRecord
	 */
	public function setHost($host)
	{
		$this->host = $host;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getHost()
	{
		return $this->host;
	}


	/**
	 * @param int $id
	 * @return DnsRecord
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
	 * @param int $ttl
	 * @return DnsRecord
	 */
	public function setTtl($ttl)
	{
		$this->ttl = $ttl;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getTtl()
	{
		return $this->ttl;
	}


	/**
	 * @return string
	 */
	abstract public function getType();
}