<?php

namespace VPSNet\Template;

class TemplateGroup
{
	/**
	 * @var string
	 */
	protected $label;


	/**
	 * @var array
	 */
	protected $templates = array();


	/**
	 * @param string $label
	 */
	public function __construct($label)
	{
		$this->label = $label;
	}


	/**
	 * Adds a Template to this group.
	 *
	 * @param Template $template
	 * @return TemplateGroup
	 */
	public function addTemplate(Template $template)
	{
		$this->templates[] = $template;
		return $this;
	}


	/**
	 * @return array
	 */
	public function getTemplates()
	{
		return $this->templates;
	}
}