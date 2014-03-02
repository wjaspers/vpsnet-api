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
     * @return string
     */
    static public function format($bytes, $precision = 1)
    {
        $map = self::getSizeMap();
        while ($bytes >= self::SCALE) {
            $bytes = $bytes / self::SCALE;
            $unit = next($map);
        }

        // @TODO Figure out if the original intent was to handle accuracy or total decimal places.
        $bytes = round($bytes, $precision);
        return $bytes . ' ' . current($map);
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
