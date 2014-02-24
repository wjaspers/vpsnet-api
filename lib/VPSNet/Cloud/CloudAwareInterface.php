<?php

namespace VPSNet\Cloud;

interface CloudAwareInterface
{
	/**
	 * @param Cloud $cloud
	 *
	 * @return CloudAware
	 */
	public function setCloud(Cloud $cloud);

	/**
	 * @return Cloud
	 */
	public function getCloud();
}