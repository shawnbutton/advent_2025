<?php

namespace Advent\Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/day02.php';



class Day02Test extends TestCase
{
    public function testParseContents(): void
    {

        $input = "11-22,95-115";
        $expected = ["11-22","95-115"];

        $this->assertEquals($expected, parseContents($input));
    }

    public function testShouldExpandRange() {

        $this->assertEquals(["2", "3", "4"], expandRange("2-4"));
    }

    public function testValidIdReturnsTrue(): void
    {
        $this->assertEquals(true, isValid("122"));
    }

    public function testRepeatOneDigitReturnsFalse(): void
    {
        $this->assertEquals(false, isValid("22"));
    }

    public function testRepeatTwoDigitsReturnsFalse(): void
    {
        $this->assertEquals(false, isValid("2323"));
    }

    public function testDoIt1(): void
    {
        $input = "11-22,95-115,998-1012,1188511880-1188511890,222220-222224,1698522-1698528,446443-446449,38593856-38593862,565653-565659,824824821-824824827,2121212118-2121212124";

        $this->assertEquals(1227775554, doit1($input));
    }

}
