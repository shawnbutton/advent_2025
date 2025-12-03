<?php
declare(strict_types=1);

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
    $halfLength = (int)($length / 2);
    $firstHalf = substr($number, 0, $halfLength);
    $secondHalf = substr($number, $halfLength);
    return $firstHalf !== $secondHalf;
}

function findRepeatingSequence(string $str): bool
{
    $length = strlen($str);
    for ($seqLength = 1; $seqLength <= $length / 2; $seqLength++) {
        if ($length % $seqLength === 0) {
            $sequence = substr($str, 0, $seqLength);
            $isRepeating = true;
            for ($i = $seqLength; $i < $length; $i += $seqLength) {
                if (substr($str, $i, $seqLength) !== $sequence) {
                    $isRepeating = false;
                    break;
                }
            }
            if ($isRepeating) {
                return true;
            }
        }
    }
    return false;
}

function isValid2(string $number): bool
{
    return !findRepeatingSequence($number);
}


function doit1(string $contents): int
{
    $ranges = parseContents($contents);
    $sum = 0;
    foreach ($ranges as $range) {
        $expanded = expandRange($range);
        foreach ($expanded as $number) {
            if (!isValid($number)) {
                $sum += (int)$number;
            }
        }
    }
    echo "Final sum: $sum" . PHP_EOL;
    return $sum;
}

function doit2(string $contents): int
{
    $ranges = parseContents($contents);
    $sum = 0;
    foreach ($ranges as $range) {
        $expanded = expandRange($range);
        foreach ($expanded as $number) {
            if (!isValid2($number)) {
                $sum += (int)$number;
            }
        }
    }
    echo "Final sum: $sum" . PHP_EOL;
    return $sum;
}

//$data = loadDay02Input();
//echo doit1($data);

$data = loadDay02Input();
echo doit2($data);