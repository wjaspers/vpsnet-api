<?php

namespace VPSNet\Cloud;

asbtract class CloudAware implements CloudAwareInterface
{
	/**
	 * @var Cloud
	 */
	protected $cloud;


	/**
	 * @param Cloud $cloud
	 *
	 * @return CloudAware
	 */
	public function setCloud(Cloud $cloud)
	{
		$this->cloud = $cloud;
		return $this;
	}


	/**
	 * @return Cloud
	 */
	public function getCloud()
	{
		return $this->cloud;
	}
}