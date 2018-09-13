<?php
/**
 * Dekaph - DEKAtrian for PHp
 * Copyright (C) 2017-2018  Vitortec.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * PHP version 7.0
 *
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2017-2018 Vitortec.com
 * @license   http://www.gnu.org/licenses GPL-3.0-or-later
 * @see       https://github.com/vitorteccom/dekaph Repository of Dekaph
 */

namespace Vitorteccom\Dekaph;

/**
 * Some methods to convert dates between Dekatrian and Gregorian calendars
 */
class Dekatrian
{

    /**
     * Check if a Dekatrian date is valid or not
     *
     * @param integer $year  Dekatrian year
     * @param integer $month Dekatrian month
     * @param integer $day   Dekatrian day
     *
     * @return boolean Dekatrian date is valid or not
     */
    private static function checkDekatrian($year, $month, $day)
    {
        if (date("L", mktime(0, 0, 0, 1, 1, $year))) {
            if ($month == 0 && $day > 2) {
                return false;
            }
        } else {
            if ($month == 0 && $day > 1) {
                return false;
            }
        }

        if ($month > 13 || $day > 28) {
            return false;
        }

        return true;
    }

    /**
     * Convert a Dekatrian date to Gregorian date
     *
     * @param integer $year  Dekatrian year
     * @param integer $month Dekatrian month
     * @param integer $day   Dekatrian day
     *
     * @return string Gregorian date, e.g. 2018-12-31
     */
    public static function dekaToGreg($year, $month, $day)
    {
        if (!self::checkDekatrian($year, $month, $day)) {
            return false;
        }

        $yearDay = ($month*28)-28;
        $yearDay = $yearDay+$day;

        // leap year
        if (date("L", mktime(0, 0, 0, 1, 1, $year))) {
            $yearDay++;

            // Sinchronian day
            if ($month == 0 && $day == 2) {
                return $year ."-1-2";
            }
        }

        //Achronian day
        if ($month == 0 && $day == 1) {
            return $year ."-1-1";
        }

        $mktime = mktime(0, 0, 0, 1, 1, $year);
        return date("Y-m-d", strtotime("+$yearDay day", $mktime));
    }

    /**
     * Convert a Gregorian date to Dekatrian date
     *
     * @param integer $year  Gregorian year
     * @param integer $month Gregorian month
     * @param integer $day   Gregorian day
     *
     * @return string Dekatrian date, e.g. 2018-13-28
     */
    public static function gregToDeka($year, $month, $day)
    {
        if (!checkdate($month, $day, $year)) {
            return false;
        }

        $yearDay = date("z", mktime(0, 0, 0, $month, $day, $year));

        // leap year
        if (date("L", mktime(0, 0, 0, $month, $day, $year))) {
            $yearDay--;

            // Sinchronian day
            if ($month == 1 && $day == 2) {
                return $year .'-0-2';
            }
        }

        // Achronian day
        if ($month == 1 && $day == 1) {
            return $year .'-0-1';
        }

        $month = floor($yearDay/28);
        $day = $yearDay-($month*28);
        $month++;

        if (!$day) {
            $day = 28;
            $month--;
        }

        return $year .'-'. $month .'-'. $day;
    }
}
