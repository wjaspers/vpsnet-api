<?php

namespace VPSNet\Util;

class ByteFormatter
{
    /**
     * @const string
     */
    const BYTES = 'bytes';


    /**
     * @const string
     */
    const GIGABYTES = 'GB';


    /**
     * @const string
     */
    const KILOBYTES = 'KB';


    /**
     * @const string
     */
    const MEGABYTES = 'MB';


    /**
     * @var int
     */
    const SCALE = 1024;


	/**
     * @const string
     */
    const TERABYTES = 'TB';


    /**
     * Returns the number of bytes formatted in the requested size.
     *
     * @param float $bytes The number of bytes.
     * @param int $precision How many decimal places matter.
     * @param string $desiredUnits The format to view in.
     *  If this is not supplied, this will attempt to format in the 
     *  smallest known scale.
     * @return string
     */
    static public function format($bytes, $precision = 1, $desiredUnits = null)
    {
        $map = self::getSizeMap();
        // We always start with bytes.
        $unit = array_shift($map);
        while ($unit !== $desiredUnits || $bytes > self::SCALE) {
            $bytes = $bytes / self::SCALE;
            $unit = array_shift($map);
        }

        return round($bytes, $precision) . ' ' . $unit;
    }


    /**
     * Returns a list of byte scales, sorted by
     * relative size (smallest to largest).
     *
     * @return array
     */
    static public function getSizeMap()
    {
        return array(
            self::BYTES,
            self::KILOBYTES,
            self::MEGABYTES,
            self::GIGABYTES,
            self::TERABYTES,
        );
    }
}
