<?php

namespace VPSNet\DNS\Record;

use VPSNet\DNS\Record;

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
