<?php

namespace VPSNet\Node;

class VpsNode extends Node
{
	const TYPE = 'vps';

	public function getType()
	{
		return self::TYPE;
	}
}
