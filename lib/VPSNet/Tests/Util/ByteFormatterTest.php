<?php

namespace VPSNet\Tests\Util;

use VPSNet\Util\ByteFormatter;

class ByteFormtterTest extends \PHPUnit_Framework_TestCase
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
				'expected' => '2.0 KB'
			),
			'1 megabyte' => array(
				'bytes' => 1024 * 1024,
				'expected' => '1.0 MB',
			),
			'1 gigabyte' => array(
				'bytes' => 1024 * 1024 * 1024,
				'expected' => '1.0 GB',
			),
			'1 terabyte' => array(
				'bytes' => 1024 * 1024 * 1024 * 1024,
				'expected' => '1.0 TB'
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


	public function dataFormatWithUnits()
	{
		return array(
			'500 bytes as KB' => array(
				'bytes' => 500,
				'units' => ByteFormatter::KILOBYTES,
				'expected' => '0.5 KB'
			),
			'500 megabytes as GB' => array(
				'bytes' => 500 * 1024 * 1024,
				'units' => ByteFormatter::GIGABYTES,
				'expected' => '0.5 GB'
			)
		);
	}


	/**
	 * @dataProvider dataFormatWithUnits
	 */
	public function testFormatWithUnits($bytes, $units, $expected)
	{
		$result = ByteFormatter::format($bytes, 1, $units);
		$this->assertSame($expected, $result);
	}
}
