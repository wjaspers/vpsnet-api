<?php

namespace VPSNet\DNS\Record;

use VPSNet\DNS\DnsRecord;

class AaaaRecord extends DnsRecord
{
	/**
	 * @const string
	 */
	const TYPE = 'aaaa';


	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}
