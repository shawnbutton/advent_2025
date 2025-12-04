<?php

namespace Advent\Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/day04.php';


class Day04Test extends TestCase
{

    public function testDoIt4_1(): void
    {
        $input = [
            "..@@.@@@@.",
            "@@@.@.@.@@",
            "@@@@@.@.@@",
            "@.@@@@..@.",
            "@@.@@@@.@@",
            ".@@@@@@@.@",
            ".@.@.@.@@@",
            "@.@@@.@@@@",
            ".@@@@@@@@.",
            "@.@.@@@.@."
        ];

        $this->assertEquals(13, doit4_1($input));
    }


//    public function testDoIt2(): void
//    {
//        $input = "11-22,95-115,998-1012,1188511880-1188511890,222220-222224,1698522-1698528,446443-446449,38593856-38593862,565653-565659,824824821-824824827,2121212118-2121212124";
//
//        $this->assertEquals(4174379265, doit2($input));
//    }

}
