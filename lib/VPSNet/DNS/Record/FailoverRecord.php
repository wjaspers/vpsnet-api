<?php

namespace VPSNet\DNS\Record;

use VPSNet\DNS\DnsRecord;

class FailoverRecord extends DnsRecord
{
	/**
	 * @const string
	 */
	const TYPE = 'failover';
	// TODO: Primary Data looks like an IP.


	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}