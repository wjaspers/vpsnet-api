<?php

namespace VPSNet\DNS\Record;

use VPSNet\DNS\DnsRecord;

class AaaaRecord extends DnsRecord
{
	const TYPE = 'aaaa';


	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}