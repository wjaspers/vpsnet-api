<?php

namespace VPSNet\Template;

use VPSNet\VirtualMachine\VirtualMachine;

class VirtualMachineTemplate
{
	/**
	 * @var Template
	 */
	protected $template;


	/**
	 * @var VirtualMachine
	 */
	protected $virtualMachine;


	/**
	 * @param Template $template
	 * @return VirtualMachineTemplate
	 */
	public function setTemplate(Template $template)
	{
		$this->template = $template;
		return $this;
	}


	/**
	 * @return Template
	 */
	public function getTemplate()
	{
		return $this->template;
	}


	/**
	 * Sets the VirtualMachine for this template.
	 *
	 * @param mixed $virtualMachine
	 * @return VirtualMachineTemplate
	 */
	public function setVirtualMachine(VirtualMachine $virtualMachine)
	{
		$this->virtualMachine = $virtualMachine;
		return $this;
	}


	/**
	 * @return VirtualMachine
	 */
	public function getVirtualMachine()
	{
		return $this->virtualMachine;
	}
}