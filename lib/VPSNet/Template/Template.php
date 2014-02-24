<?php

namespace VPSNet\Template;

abstract class Template
{
	/**
	 * @var string
	 */
	protected $description;


	/**
	 * @var int
	 */
	protected $id;


	/**
	 * @var string
	 */
	protected $label;


	/**
	 * @param string $label
	 * @param string $description
	 */
	public function __construct($label = '', $description = '')
    {
        $this->label = $label;
        $this->description = $description;
    }

	/**
	 * Returns the label.
	 *
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
	}


	/**
	 * @param string $label
	 *
	 * @return Template
	 */
	public function setLabel($label)
	{
		$this->label = $label;
		return $this;
	}


	/**
	 * Returns the description.
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}


	/**
	 * Sets the description.
	 *
	 * @param string $description
	 * @return Template
	 */
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}


	/**
	 * @param int $id
	 *
	 * @return Template
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
}