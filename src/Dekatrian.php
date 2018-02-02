<?php
/**
 * Vitortec.com Dekatrian Calendar
 *
 * PHP Version 7.0
 *
 * @package   Vitorteccom\Dekaph
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2011-2018 Vitortec.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version   GIT: <git_id>
 * @see       https://devs.vitortec.com/dekaph Documentation of Dekatrian Calendar
 */

namespace Vitorteccom\Dekaph;

/**
 * Dekatrian class
 *
 * @package   Vitorteccom\Dekaph\Dekatrian
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2011-2018 Vitortec.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @see       https://devs.vitortec.com/dekaph Documentation of Dekatrian Calendar
 */
class Dekatrian
{
    /**
     * Check Dekatrian
     *
     * @param  integer $year  Dekatrian year
     * @param  integer $mouth Dekatrian mouth
     * @param  integer $day   Dekatrian day
     *
     * @return boolean         Dekatrian date is valid or not
     */
    public function checkDekatrian($year, $mouth, $day)
    {
        if (date("L", mktime(0, 0, 0, 1, 1, $year))) {
            if ($mouth == 0 && $day > 2) {
                return false;
            }
        } else {
            if ($mouth == 0 && $day > 1) {
                return false;
            }
        }

        if ($mouth > 13 || $day > 28) {
            return false;
        }

        return true;
    }

    /**
     * Dekatrian to Gregorian
     *
     * @param  integer $year  Dekatrian year
     * @param  integer $mouth Dekatrian mouth
     * @param  integer $day   Dekatrian day
     *
     * @return string         Gregorian date, e.g. 2018-12-31
     */
    public function dekatoGreg($year, $mouth, $day)
    {
        if (!$this->checkDekatrian($year, $mouth, $day)) {
            return false;
        }

        $yearDay = ($mouth*28)-28;
        $yearDay = $yearDay+$day;

        //leap year
        if (date("L", mktime(0, 0, 0, 1, 1, $year))) {
            $yearDay++;

            //Sinchronian day
            if ($mouth == 0 && $day == 2) {
                return $year ."-1-2";
            }
        }

        //Achronian day
        if ($mouth == 0 && $day == 1) {
            return $year ."-1-1";
        }

        return date("Y-m-d", strtotime("+$yearDay day", mktime(0, 0, 0, 1, 1, $year)));
    }

    /**
     * Gregorian to Dekatrian
     *
     * @param  integer $year  Gregorian year
     * @param  integer $mouth Gregorian mouth
     * @param  integer $day   Gregorian day
     *
     * @return string        Dekatrian date, e.g. 2018-13-28
     */
    public function gregToDeka($year, $mouth, $day)
    {
        if (!checkdate($mouth, $day, $year)) {
            return false;
        }

        $yearDay = date("z", mktime(0, 0, 0, $mouth, $day, $year));

        //leap year
        if (date("L", mktime(0, 0, 0, $mouth, $day, $year))) {
            $yearDay--;

            //Sinchronian day
            if ($mouth == 1 && $day == 2) {
                return $year .'-0-2';
            }
        }

        //Achronian day
        if ($mouth == 1 && $day == 1) {
            return $year .'-0-1';
        }

        $mouth = floor($yearDay/28);
        $day = $yearDay-($mouth*28);
        $mouth++;

        if (!$day) {
            $day = 28;
            $mouth--;
        }

        return $year .'-'. $mouth .'-'. $day;
    }
}
