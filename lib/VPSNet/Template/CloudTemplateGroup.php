<?php

namespace VPSNet\Template;

use VPSNet\Cloud\Cloud;
use VPSNet\Cloud\CloudAwareInterface;

class CloudTemplateGroup extends TemplateGroup implements CloudAwareInterface
{
	/**
	 * @var Cloud
	 */
	protected $cloud;


	/**
	 * @param Cloud $cloud
	 *
	 * @return CloudTemplateGroup
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