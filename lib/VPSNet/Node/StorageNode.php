<?php

namespace VPSNet\Node;

class StorageNode extends Node
{
	const TYPE = 'storage';

	public function getType()
	{
		return self::TYPE;
	}
}