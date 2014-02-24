<?php

namespace VPSNet\API;

abstract class ApiAdapter
{
	/**
	 * @var string
	 */
	protected $apiKey;


	/**
	 * @var string
	 */
	protected $apiUrl;


	/**
	 * @var string
	 */
	protected $apiVersion;


	/**
	 * @var string
	 */
	protected $username;


	/**
	 * Initializes any necessary configuration for this adapter.
	 */
	protected function init()
	{
		// Override this method as required.
	}


	/**
	 * @param string $apiKey
	 */
	public function setApiKey($apiKey)
	{
		$this->apiKey = $apiKey;
	}


	/**
	 * @return string
	 */
	public function getApiKey()
	{
		return $this->apiKey;
	}


	/**
	 * @param string $apiUrl
	 */
	public function setApiUrl($apiUrl)
	{
		$this->apiUrl = $apiUrl;
	}


	/**
	 * @return string
	 */
	public function getApiUrl()
	{
		return $this->apiUrl;
	}


	/**
	 * @param string $apiVersion
	 */
	public function setApiVersion($apiVersion)
	{
		$this->apiVersion = $apiVersion;
	}


	/**
	 * @return string
	 */
	public function getApiVersion()
	{
		return $this->apiVersion;
	}


	/**
	 * @param string $username
	 */
	public function setUsername($username)
	{
		$this->username = $username;
	}


	/**
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}
}