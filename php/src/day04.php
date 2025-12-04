<?php
declare(strict_types=1);

function loadDay03Input(): string
{
    return file_get_contents(__DIR__ . '/day03.txt');
}





function doit4_1(array $lines): int
{
    $sum = 0;

    echo "Final largest: $sum" . PHP_EOL;
    return $sum;
}



function doit4_2(string $contents): int
{
    $lines = explode("\n", $contents);
    $sum = 0;


    return $sum;
}

$data = loadDay03Input();
$lines = explode("\n", $data);

echo doit4_1($lines);

//$data = loadDay03Input();
//echo doit2($data);