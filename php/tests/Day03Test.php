<?php

namespace Advent\Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/day03.php';


class Day03Test extends TestCase
{

    public function testFindLargest(): void
    {
        $this->assertEquals(23, findLargest("123"));
        $this->assertEquals(13, findLargest("113"));
        $this->assertEquals(24, findLargest("124"));
    }

    public function testDoIt3_1(): void
    {
        $input = [
            "987654321111111",
            "811111111111119",
            "234234234234278",
            "818181911112111"
        ];

        $this->assertEquals(357, doit3_1($input));
    }

//    public function testDoIt2(): void
//    {
//        $input = "11-22,95-115,998-1012,1188511880-1188511890,222220-222224,1698522-1698528,446443-446449,38593856-38593862,565653-565659,824824821-824824827,2121212118-2121212124";
//
//        $this->assertEquals(4174379265, doit2($input));
//    }

}
