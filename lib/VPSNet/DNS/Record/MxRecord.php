<?php

namespace VPSNet\DNS\Record;

use VPSNet\DNS\DnsRecord;

class MxRecord extends DnsRecord
{
	/**
	 * @const string
	 */
	const TYPE = 'mx';

	/**
	 * @var int
	 */
	protected $priority;


	/**
	 * @param int $priority
	 * @return MxRecord
	 */
	public function setPriority($priority)
	{
		$this->priority = $priority;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getPriority()
	{
		return $this->priority;
	}


	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}