<?php

namespace VPSNet\DNS\Record;

use VPSNet\DNS\DnsRecord;

class TxtRecord extends DnsRecord
{
	/**
	 * @const string
	 */
	const TYPE = 'txt';


	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}