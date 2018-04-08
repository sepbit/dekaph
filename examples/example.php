<?php
/**
 * example.php
 *
 * PHP Version 7.0
 *
 * @package   Vitorteccom\Dekaph
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2011-2018 Vitortec.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0-or-later
 * @see       https://devs.vitortec.com/dekaph Documentation of Dekaph
 */

require __DIR__ .'/../vendor/autoload.php';

use Vitorteccom\Dekaph\Dekatrian;

$year = 2017;
$month = 0;
$day = 1;

if (Dekatrian::checkDekatrian($year, $month, $day)) {
    echo 'Dekatrian date is valid<br />';
} else {
    echo 'Dekatrian date is invalid<br />';
}

echo 'Dekatrian: '. $year .'-'. $month .'-'. $day .'<br />';
echo 'Gregorian: '. Dekatrian::dekatoGreg($year, $month, $day);
echo '<br /><br />';

$year = 2016;
$month = 12;
$day = 31;
echo 'Gregorian: '. $year .'-'. $month .'-'. $day .'<br />';
echo 'Dekatrian: '. Dekatrian::gregToDeka($year, $month, $day);
