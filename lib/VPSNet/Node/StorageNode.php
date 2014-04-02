<?php

namespace VPSNet\Node;

class StorageNode extends Node
{
	/**
	 * @const string
	 */
	const TYPE = 'storage';


	/**
	 * @return string
	 */
	public function getType()
	{
		return self::TYPE;
	}
}
