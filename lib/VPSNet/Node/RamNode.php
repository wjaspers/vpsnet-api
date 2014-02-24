<?php

namespace VPSNet\Node;

class RamNode extends Node
{
	const TYPE = 'ram';

	public function getType()
	{
		return self::TYPE;
	}
}