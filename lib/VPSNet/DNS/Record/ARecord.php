<?php

namespace VPSNet\DNS\Record;
use VPSNet\Dns\Record;

class ARecord extends DnsRecord
{
	/**
	 * @const string
	 */
	const TYPE = 'a';

	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}