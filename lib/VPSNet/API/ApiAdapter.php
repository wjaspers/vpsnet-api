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
	 * @return ApiAdapter
	 */
	public function setApiKey($apiKey)
	{
		$this->apiKey = $apiKey;
		return $this;
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
	 * @return ApiAdapter
	 */
	public function setApiUrl($apiUrl)
	{
		$this->apiUrl = $apiUrl;
		return $this;
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
	 * @return ApiAdapter
	 */
	public function setApiVersion($apiVersion)
	{
		$this->apiVersion = $apiVersion;
		return $this;
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
	 * @return ApiAdapter
	 */
	public function setUsername($username)
	{
		$this->username = $username;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}
}
