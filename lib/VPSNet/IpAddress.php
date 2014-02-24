<?php

namespace VPSNet;


class IpAddress
{
    /**
     * @var int
     */
    protected $id;


    /**
     * @var string
     */
    protected $ipAddress;


	/**
	 * @var bool
	 */
	protected $isInternal;


	/**
     * @var string
     */
    protected $netmask;


    /**
     * @var string
     */
    protected $network;


    /**
     * @param string $ipAddress
	 * @param string $netmask
	 * @param string $network
     */
    public function __construct($ipAddress, $netmask = null, $network = null)
    {
        $this->ipAddress = $ipAddress;
		$this->netmask = $netmask;
		$this->network = $network;
    }


    /**
     * Use to find out if an IP address is Internal
	 *
	 * @return bool
     */
    public function getIsInternal()
    {
        return $this->isInternal;
    }


	/**
	 * @param $isInternal
	 *
	 * @return IpAddress
	 */
	public function setIsInternal($isInternal)
	{
		$this->isInternal = $isInternal;
		return $this;
	}

    /**
     * Returns the IP address.
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }


    /**
     * Sets the IP address.
     *
     * @param string $ipAddress
     * @return IpAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }


    /**
     * Returns the netmask
     *
     * @return string
     */
    public function getNetmask()
    {
        return $this->netmask;
    }


    /**
     * Sets the Netmask
     *
     * @param string $netmask
     * @return IpAddress
     */
    public function setNetmask($netmask)
    {
        $this->netmask = $netmask;
        return $this;
    }


    /**
     * Returns the network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }


    /**
     * Sets the network.
     *
     * @param string $network
     * @return IpAddress
     */
    public function setNetwork($network)
    {
        $this->network = $network;
        return $this;
    }
}

