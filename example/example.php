<?php
require __DIR__ .'/../vendor/autoload.php';

use Vitorteccom\Dekaph\Dekatrian;
$dekaph = new Dekatrian;

$year = 2017;
$mouth = 0;
$day = 2;

if ($dekaph->checkDekatrian($year, $mouth, $day)) {
    echo "Dekatrian date is valid<br />";
} else {
    echo "Dekatrian date is invalid<br />";
}

echo "Dekatrian: $year-$mouth-$day<br />";
echo 'Gregorian: '. $dekaph->dekatoGreg($year, $mouth, $day);

echo "<br /><br />";

$year = 2016;
$mouth = 12;
$day = 31;

echo "Gregorian: $year-$mouth-$day<br />";
echo 'Dekatrian: '. $dekaph->gregToDeka($year, $mouth, $day);
