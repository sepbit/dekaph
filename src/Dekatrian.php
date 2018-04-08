<?php
/**
 * Dekatrian.php
 *
 * PHP Version 7.0
 *
 * @package   Vitorteccom\Dekaph
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2011-2018 Vitortec.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0-or-later
 * @version   GIT: <git_id>
 * @see       https://devs.vitortec.com/dekaph Documentation of Dekaph
 */

namespace Vitorteccom\Dekaph;

/**
 * Some methods to convert dates between Dekatrian and Gregorian calendars
 *
 * @package   Vitorteccom\Dekaph\Dekatrian
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2011-2018 Vitortec.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0-or-later
 * @version   GIT: <git_id>
 * @see       https://devs.vitortec.com/dekaph Documentation of Dekaph
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
    public static function checkDekatrian($year, $month, $day)
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
    public static function dekatoGreg($year, $month, $day)
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
