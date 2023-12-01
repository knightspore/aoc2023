<?php

$total = 0;
$file = file_get_contents("./inputs/day1.txt");
$lines = [];

$all_lines = explode("\n", $file);
foreach ($all_lines as $line) {
    if ($line != "") {
        array_push($lines, $line);
    }
}

function getNumbersFromLine(string $line): array
{
    $exp = "/[a-z]/i";
    return str_split(preg_replace($exp, "", $line));
}

foreach ($lines as $line) {
    $line_numbers = getNumbersFromLine($line);
    $first = $line_numbers[0];
    $last = end($line_numbers);
    $val = intval($first . $last);
    $total += $val;
}

echo $total;
