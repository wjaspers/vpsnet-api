<?php

namespace VPSNet\Cloud;

interface CloudAwareInterface
{
	/**
	 * @return Cloud
	 */
	public function getCloud();
}
