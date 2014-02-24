<?php

namespace VPSNet\Ticket;

abstract class MessageEnvelope
{
	/**
	 * @var string
	 */
	protected $body;


	/**
	 * @param string $body
	 * @return Ticket
	 */
	public function setBody($body)
	{
		$this->body = $body;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getBody()
	{
		return $this->body;
	}
}
