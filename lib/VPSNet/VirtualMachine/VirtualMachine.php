<?php

namespace VPSNet\VirtualMachine;

use DateTime;

class VirtualMachine
{
	/**
	 * @var array
	 */
	protected $backups = array();
	
	
	/**
	 * @var bool
	 */
	protected $backupsEnabled;
	
	
	/**
	 * @var DateTime
	 */
	protected $createdAt;
	
	
	/**
	 * @var bool
	 */
	protected $isDeleted;
	
	
	/**
	 * @var string
	 */
	protected $domainName;
	
	
	/**
	 * @var string
	 */
	protected $hostname;
	
	
	/**
	 * @var int
	 */
	protected $id;
	
	
	/**
	 * @var string
	 */
	protected $label;
	
	
	/**
	 * @var string
	 */
	protected $license;
	
	
	/**
	 * @var string
	 */
	protected $password;
	
	
	/**
	 * @var int
	 */
	protected $ramNodesRequired;
	
	
	/**
	 * @var bool
	 */
	protected $rsyncBackupsEnabled;
	
	
	/**
	 * @var bool
	 */
	protected $r1SoftBackupsEnabled;
	
	
	/**
	 * @var int
	 */
	protected $slicesCount;
	
	
	/**
	 * @var int
	 */
	protected $slicesRequired;
	
	
	/**
	 * @var int
	 */
	protected $systemTemplateId;
	
	
	/**
	 * @var DateTime
	 */
	protected $updatedAt;


	/**
	 * @param string $label
	 * @param string $hostname
	 */
	public function __construct($label = '', $hostname = null)
	{
		$this->label = $label;
		$this->hostname = $hostname;
	}


	/**
	 * @param array $backups
	 * @return VirtualMachine
	 */
	public function setBackups(array $backups)
	{
		$this->backups = $backups;
		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getBackups()
	{
		return $this->backups;
	}


	/**
	 * @param boolean $backupsEnabled
	 * @return VirtualMachine
	 */
	public function setBackupsEnabled($backupsEnabled)
	{
		$this->backupsEnabled = $backupsEnabled;
		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getBackupsEnabled()
	{
		return $this->backupsEnabled;
	}


	/**
	 * @param DateTime $createdAt
	 * @return VirtualMachine
	 */
	public function setCreatedAt(DateTime $createdAt)
	{
		$this->createdAt = $createdAt;
		return $this;
	}


	/**
	 * @return DateTime
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}


	/**
	 * @param string $domainName
	 * @return VirtualMachine
	 */
	public function setDomainName($domainName)
	{
		$this->domainName = $domainName;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getDomainName()
	{
		return $this->domainName;
	}


	/**
	 * @param string $hostname
	 * @return VirtualMachine
	 */
	public function setHostname($hostname)
	{
		$this->hostname = $hostname;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}


	/**
	 * @param int $id
	 * @return VirtualMachine
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
	 * @param boolean $isDeleted
	 */
	public function setIsDeleted($isDeleted)
	{
		$this->isDeleted = $isDeleted;
	}


	/**
	 * @return boolean
	 */
	public function getIsDeleted()
	{
		return $this->isDeleted;
	}


	/**
	 * @param string $label
	 * @return VirtualMachine
	 */
	public function setLabel($label)
	{
		$this->label = $label;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
	}


	/**
	 * @param string $license
	 * @return VirtualMachine
	 */
	public function setLicense($license)
	{
		$this->license = $license;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getLicense()
	{
		return $this->license;
	}


	/**
	 * @param string $password
	 * @return VirtualMachine
	 */
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}


	/**
	 * @param boolean $r1SoftBackupsEnabled
	 * @return VirtualMachine
	 */
	public function setR1SoftBackupsEnabled($r1SoftBackupsEnabled)
	{
		$this->r1SoftBackupsEnabled = $r1SoftBackupsEnabled;
		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getR1SoftBackupsEnabled()
	{
		return $this->r1SoftBackupsEnabled;
	}


	/**
	 * @param int $ramNodesRequired
	 * @return VirtualMachine
	 */
	public function setRamNodesRequired($ramNodesRequired)
	{
		$this->ramNodesRequired = $ramNodesRequired;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getRamNodesRequired()
	{
		return $this->ramNodesRequired;
	}


	/**
	 * @param boolean $rsyncBackupsEnabled
	 * @return VirtualMachine
	 */
	public function setRsyncBackupsEnabled($rsyncBackupsEnabled)
	{
		$this->rsyncBackupsEnabled = $rsyncBackupsEnabled;
		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getRsyncBackupsEnabled()
	{
		return $this->rsyncBackupsEnabled;
	}


	/**
	 * @param int $slicesCount
	 * @return VirtualMachine
	 */
	public function setSlicesCount($slicesCount)
	{
		$this->slicesCount = $slicesCount;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getSlicesCount()
	{
		return $this->slicesCount;
	}


	/**
	 * @param int $slicesRequired
	 * @return VirtualMachine
	 */
	public function setSlicesRequired($slicesRequired)
	{
		$this->slicesRequired = $slicesRequired;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getSlicesRequired()
	{
		return $this->slicesRequired;
	}


	/**
	 * TODO: I dont believe this actually belongs to the VM model
	 * but I dont see anything that suggests otherwise, either.
	 * @param int $systemTemplateId
	 * @return VirtualMachine
	 */
	public function setSystemTemplateId($systemTemplateId)
	{
		$this->systemTemplateId = $systemTemplateId;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getSystemTemplateId()
	{
		return $this->systemTemplateId;
	}


	/**
	 * @param DateTime $updatedAt
	 * @return VirtualMachine
	 */
	public function setUpdatedAt(DateTime $updatedAt)
	{
		$this->updatedAt = $updatedAt;
		return $this;
	}


	/**
	 * @return DateTime
	 */
	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}
}
