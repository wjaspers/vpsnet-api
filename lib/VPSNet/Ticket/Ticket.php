<?php

namespace VPSNet\Ticket;

class Ticket extends MessageEnvelope
{
	/**
	 * @var string
	 */
	protected $department;


	/**
	 * @var int
	 */
	protected $id;


	/**
	 * @var string
	 */
	protected $subject;


	/**
	 * @param string $department
	 * @return Ticket
	 */
	public function setDepartment($department)
	{
		$this->department = $department;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getDepartment()
	{
		return $this->department;
	}


	/**
	 * @param int $id
	 * @return Ticket
	 */
	public function setId($id)
	{
		$this->id = $id;
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
	 * @param string $subject
	 * @return Ticket
	 */
	public function setSubject($subject)
	{
		$this->subject = $subject;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getSubject()
	{
		return $this->subject;
	}
}