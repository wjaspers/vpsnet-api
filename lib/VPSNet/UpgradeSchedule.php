<?php

namespace VPSNet;

use DateTime;

class UpgradeSchedule
{
	/**
	 * @var int
	 */
	protected $days;


	/**
	 * @var int
	 */
	protected $extraSlices;


	/**
	 * @var int
	 */
	protected $id;


	/**
	 * @var string
	 */
	protected $label;


	/**
	 * @var bool
	 */
	protected $isTemporary;


	/**
	 * @var DateTime
	 */
	protected $runAt;


	/**
	 * @param string   $label
	 * @param int      $extraSlices
	 * @param DateTime $runAt
	 * @param int      $days
	 * @param bool     $isTemporary
	 */
	public function __construct($label, $extraSlices, DateTime $runAt = null, $days = 0, $isTemporary = false)
    {
        $this->label = $label;
        $this->extraSlices = $extraSlices;
        $this->runAt = $runAt;
        $this->days = $days;
		$this->isTemporary = $isTemporary;
    }


	/**
	 * @param int $days
	 * @return UpgradeSchedule
	 */
	public function setDays($days)
	{
		$this->days = $days;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getDays()
	{
		return $this->days;
	}


	/**
	 * @param int $extraSlices
	 * @return UpgradeSchedule
	 */
	public function setExtraSlices($extraSlices)
	{
		$this->extraSlices = $extraSlices;
		return $this;
	}


	/**
	 * @return int
	 */
	public function getExtraSlices()
	{
		return $this->extraSlices;
	}


	/**
	 * @param int $id
	 * @return UpgradeSchedule
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
	 * @param boolean $isTemporary
	 * @return UpgradeSchedule
	 */
	public function setIsTemporary($isTemporary)
	{
		$this->isTemporary = $isTemporary;
		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getIsTemporary()
	{
		return $this->isTemporary;
	}


	/**
	 * @param string $label
	 * @return UpgradeSchedule
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
	 * @param DateTime $runAt
	 * @return UpgradeSchedule
	 */
	public function setRunAt(DateTime $runAt)
	{
		$this->runAt = $runAt;
		return $this;
	}


	/**
	 * @return DateTime
	 */
	public function getRunAt()
	{
		return $this->runAt;
	}
}

