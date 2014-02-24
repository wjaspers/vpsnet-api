<?php

namespace VPSNet\DNS\Record;

use VPSNet\DNS\DnsRecord;

class NsRecord extends DnsRecord
{
	/**
	 * @const string
	 */
	const TYPE = 'ns';


	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}