<?php

namespace VPSNet\API;

class CurlApiAdapter extends ApiAdapter
{
	/**
	 * @var string
	 */
	protected $cookiePath;


	/**
	 * @var Resource
	 */
	protected $curlHandle;


	/**
	 * @var string
	 */
	protected $proxy;


	/**
	 * @var string
	 */
	protected $userAgent;


	/**
	 * @var bool
	 */
	protected $verifySslPeer = false;


	/**
	 * Initializes the Curl Handler
	 */
	protected function init()
	{
		if ($this->curlHandle) {
			return;
		}
		$this->curlHandle = curl_init();
		if ($this->cookiePath) {
			$this->setCurlOpt(CURLOPT_COOKIEFILE, $this->cookiePath);
			$this->setCurlOpt(CURLOPT_COOKIEJAR, $this->cookiePath);
		}
		$this->setCurlOpt(CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Accept: application/json'
		));
		if ($this->proxy) {
			$this->setCurlOpt(CURLOPT_PROXY, $proxy);
		}
		$this->setCurlOpt(CURLOPT_RETURNTRANSFER, true);
		if ($this->verifySslPeer) {
			$this->setCurlOpt(CURLOPT_SSL_VERIFYPEER, $this->verifySslPeer);
		}
		if ($this->userAgent) {
			$this->setCurlOpt(CURLOPT_USERAGENT, $this->userAgent);
		}
		$this->setCurlOpt(CURLOPT_USERPWD, $this->username . ':' . $this->apiKey);
	}


	/**
	 * A wrapper for the curl client so its a little easier to test.
	 * @param int $opt A CURLOPT constant.
	 * @param mixed $value The value to set.
	 */
	protected function setCurlOpt($opt, $value)
	{
		curl_setopt($this->curlHandle, $opt, $value);
	}

	/**
	 * @param string $cookiePath
	 * @return CurlApiAdapter
	 */
	public function setCookiePath($cookiePath)
	{
		$this->cookiePath = $cookiePath;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getCookiePath()
	{
		return $this->cookiePath;
	}


	/**
	 * @param string $proxy
	 * @return CurlApiAdapter
	 */
	public function setProxy($proxy)
	{
		$this->proxy = $proxy;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getProxy()
	{
		return $this->proxy;
	}


	/**
	 * @param string $userAgent
	 * @return CurlApiAdapter
	 */
	public function setUserAgent($userAgent)
	{
		$this->userAgent = $userAgent;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getUserAgent()
	{
		return $this->userAgent;
	}


	/**
	 * @param boolean $verifySslPeer
	 * @return CurlApiAdapter
	 */
	public function setVerifySslPeer($verifySslPeer)
	{
		$this->verifySslPeer = $verifySslPeer;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getVerifySslPeer()
	{
		return $this->verifySslPeer;
	}


	/**
	 * Make sure the curl handle closes before our API adapter is destroyed,
	 * otherwise it will waste resources/memory.
	 */
	protected function __destruct()
	{
		if ($this->curlHandle) {
			curl_close($this->curlHandle);
		}
	}
}