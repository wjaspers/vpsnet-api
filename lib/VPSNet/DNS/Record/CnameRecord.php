<?php

namespace VPSNet\DNS\Record;

use VPSNet\DNS\Record;

class CnameRecord
extends DnsRecord
{
	/**
	 * @const string
	 */
	const TYPE = 'cname';


	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}