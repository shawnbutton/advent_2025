<?php

function loadDay02Input(): string
{
    return file_get_contents(__DIR__ . '/day02.txt');
}

function parseContents(string $contents): array
{
    $splitByCommas = explode(",", $contents);
    return $splitByCommas;
}

function expandRange(string $range): array
{
    $parts = explode("-", $range);
    $start = (int)$parts[0];
    $end = (int)$parts[1];
    $result = [];
    for ($i = $start; $i <= $end; $i++) {
        $result[] = (string)$i;
    }
    return $result;
}


function isValid(string $number): bool
{
    $length = strlen($number);
    $halfLength = $length / 2;
    $firstHalf = substr($number, 0, $halfLength);
    $secondHalf = substr($number, $halfLength);
    return $firstHalf !== $secondHalf;
}


function doit1(string $contents): int
{
    echo "Input contents: $contents" . PHP_EOL;
    $ranges = parseContents($contents);
    $sum = 0;
    foreach ($ranges as $range) {
        $expanded = expandRange($range);
        foreach ($expanded as $number) {
            if (isValid((string)$number)) {
                $sum += (int)$number;
            }
        }
    }
    echo "Final sum: $sum" . PHP_EOL;
    return $sum;
}

