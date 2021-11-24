<?php

namespace Hakam\LeetCodePhp\Tests\Helper;

use JsonException;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * @codeCoverageIgnore
 */
abstract class MainTest extends TestCase
{
    /**
     * @dataProvider provideData
     */
    abstract public function testWithDataList($expectedResult, $inputData) :void;

    /**
     * @throws JsonException
     */
    public function provideData(): array
    {
        $inputFile = file_get_contents( __DIR__ . "/InputFiles/" . (new ReflectionClass(static::class))->getShortName() . ".json");
        return json_decode($inputFile, true, 512, JSON_THROW_ON_ERROR);
    }
}