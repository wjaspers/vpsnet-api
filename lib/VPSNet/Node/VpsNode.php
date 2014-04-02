<?php

namespace VPSNet\Node;

class VpsNode extends Node
{
	/**
	 * @const string
	 */
	const TYPE = 'vps';


	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}
