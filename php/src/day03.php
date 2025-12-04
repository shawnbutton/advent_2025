<?php
declare(strict_types=1);

function loadDay03Input(): string
{
    return file_get_contents(__DIR__ . '/day03.txt');
}


function findLargest(string $string): int
{
    $chars = str_split($string);
    $largest = 0;

    for ($first = 0; $first < strlen($string) - 1; $first++) {
        for ($second = $first + 1; $second < strlen($string) - 1; $second++) {
            $number = (int)($chars[$first] . $chars[$second + 1]);

            if ($number > $largest) {
                $largest = $number;
            }
        }

    }
    return $largest;
}


function doit3_1(array $lines): int
{
    $sum = 0;

    foreach ($lines as $line) {
        $largest = findLargest($line);
        echo "$line => $largest" . PHP_EOL;
        $sum += $largest;
    }

    echo "Final largest: $sum" . PHP_EOL;
    return $sum;
}

function doit3_2(string $contents): int
{
}

//$data = loadDay03Input();
//echo doit3_1($data);

//$data = loadDay03Input();
//echo doit2($data);