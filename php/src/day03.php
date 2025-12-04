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

    for ($first = 0; $first < strlen($string); $first++) {
        echo "Trying $first: $chars[$first]" . PHP_EOL;
        for ($second = $first + 1; $second < strlen($string); $second++) {
            echo "Second Trying $second: $chars[$second]" . PHP_EOL;
            $number = (int)($chars[$first] . $chars[$second]);
            echo "number $chars[$first] + $chars[$second] = $number" . PHP_EOL;
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

$data = loadDay03Input();
$lines = explode("\n", $data);

echo doit3_1($lines);

//$data = loadDay03Input();
//echo doit2($data);