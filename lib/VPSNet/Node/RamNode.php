<?php

namespace VPSNet\Node;

class RamNode extends Node
{
	/**
	 * @const string
	 */
	const TYPE = 'ram';

	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}
