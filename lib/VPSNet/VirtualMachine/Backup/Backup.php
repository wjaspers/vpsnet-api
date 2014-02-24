<?php

namespace VPSNet\VirtualMachine\Backup;

/**
 * Backups class
 */
class Backup
{
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
	 */
	public function __construct($label)
	{
		$this->label = $label;
	}


    /**
     * Returns the backup id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Sets the backup id.
     *
     * @param int $id
     * @return Backup
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


    /**
     * Returns the label for this backup.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }


    /**
     * Sets the label.
     *
     * @param string $label
     * @return Backup
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }
}
