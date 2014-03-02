<?php

namespace VPSNet\Tests\Util;

use VPSNet\Util\ByteFormatter;

class ByteFormatterTest extends \PHPUnit_Framework_TestCase
{
	public function testGetSizeMap()
	{
		$map = ByteFormatter::getSizeMap();
		$expectedMap = array(
			ByteFormatter::BYTES,
			ByteFormatter::KILOBYTES,
			ByteFormatter::MEGABYTES,
			ByteFormatter::GIGABYTES,
			ByteFormatter::TERABYTES,
		);
		$this->assertSame($expectedMap, $map);
	}

	public function dataFormat()
	{
		return array(
			'500 bytes' => array(
				'bytes' => 500,
				'expected' => '500 bytes',
			),
			'2048 bytes' => array(
				'bytes' => 1024 * 2,
				'expected' => '2 KB',
			),
			'2050 bytes' => array(
				'bytes' => 1025 * 2,
				'expected' => '2 KB'
			),
			'1 byte over 1 megabyte' => array(
				'bytes' => 1025 * 1024,
				'expected' => '1 MB',
			),
			'1 gigabyte' => array(
				'bytes' => 1025 * 1024 * 1024,
				'expected' => '1 GB',
			),
			'1 terabyte' => array(
				'bytes' => 1025 * 1024 * 1024 * 1024,
				'expected' => '1 TB'
			)
		);
	}

	/**
	 * @dataProvider dataFormat
	 */
	public function testFormat($bytes, $expected)
    {
		$result = ByteFormatter::format($bytes);
		$this->assertSame($expected, $result);
	}


    public function dataFormatWithPrecision()
    {
        return array(
            '500 bytes to 3 decimal places' => array(
                'bytes' => 500,
                'precision' => 3,
                'expected' => '500 bytes',
            ),
            '5000 bytes to 3 decimal places' => array(
                'bytes' => 5000,
                'precision' => 3,
                'expected' => '4.883 KB',
            ),
            '1234 bytes to 1 decimal place' => array(
                'bytes' => 1234,
                'precision' => 1,
                'expected' => '1.2 KB',
            ),
        );
    }

    /**
     * @dataProvider dataFormatWithPrecision
     */
    public function testFormatWithPrecision($bytes, $precision, $expected)
    {
        $result = ByteFormatter::format($bytes, $precision);
        $this->assertSame($expected, $result);
    }
}
