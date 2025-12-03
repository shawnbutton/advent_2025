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
    return $number == 122;
}


function doit1(string $contents): int
{
    $ranges = parseContents($contents);
    $sum = 0;
    foreach ($ranges as $range) {
        $expanded = expandRange($range);
        foreach ($expanded as $number) {
            if (isValid((int)$number)) {
                $sum += (int)$number;
            }
        }
    }
    return $sum;
}

