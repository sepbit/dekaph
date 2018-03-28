<?php
require __DIR__ .'/../vendor/autoload.php';

use Vitorteccom\Dekaph\Dekatrian;
$dekaph = new Dekatrian;

$year = 2017;
$month = 0;
$day = 1;

if ($dekaph->checkDekatrian($year, $month, $day)) {
    echo "Dekatrian date is valid<br />";
} else {
    echo "Dekatrian date is invalid<br />";
}

echo "Dekatrian: $year-$month-$day<br />";
echo 'Gregorian: '. $dekaph->dekatoGreg($year, $month, $day);

echo "<br /><br />";

$year = 2016;
$month = 12;
$day = 31;

echo "Gregorian: $year-$month-$day<br />";
echo 'Dekatrian: '. $dekaph->gregToDeka($year, $month, $day);
