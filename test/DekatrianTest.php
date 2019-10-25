<?php
/**
 * Dekaph - DEKAtrian for PHp
 * Copyright (C) 2017-2019  Sepbit
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
 */

namespace Sepbit\Dekaph;

use PHPUnit\Framework\TestCase;
use Sepbit\Dekaph\Dekatrian;

/**
 * Some methods to test the methods of class Dekatrian
 */
class DekatrianTest extends TestCase
{
    /**
     * Test private method checkDekatrian - 2018-0-2
     *
     * @return void
     */
    public function testCheckDekatrian201802()
    {
        $this->expectException('BadMethodCallException');
        Dekatrian::dekaToGreg(2018, 0, 2);
    }

    /**
     * Test private method checkDekatrian - 2018-14-2
     *
     * @return void
     */
    public function testCheckDekatrian2018142()
    {
        $this->expectException('BadMethodCallException');
        Dekatrian::dekaToGreg(2018, 14, 2);
    }

    /**
     * Test public method dekaToGreg - Achronian day
     *
     * @return void
     */
    public function testDekaToGregAchronianDay()
    {
        $this->assertEquals(
            '2018-1-1',
            Dekatrian::dekaToGreg(2018, 0, 1)
        );
    }

    /**
     * Test public method dekaToGreg - Sinchronian day
     *
     * @return void
     */
    public function testDekaToGregSinchronianDay()
    {
        $this->assertEquals(
            '2016-1-2',
            Dekatrian::dekaToGreg(2016, 0, 2)
        );
    }

     /**
     * Test public method dekaToGreg - Other day
     *
     * @return void
     */
    public function testDekaToGregOtherDay()
    {
        $this->assertEquals(
            '2018-12-31',
            Dekatrian::dekaToGreg(2018, 13, 28)
        );
    }

    /**
     * Test public method gregToDeka - checkdate
     *
     * @return void
     */
    public function testGregToDekaCheckdate()
    {
        $this->expectException('BadMethodCallException');
        Dekatrian::gregToDeka(2018, 13, 1);
    }

    /**
     * Test public method gregToDeka - Achronian day
     *
     * @return void
     */
    public function testGregToDekaAchronianDay()
    {
        $this->assertEquals(
            '2018-0-1',
            Dekatrian::gregToDeka(2018, 1, 1)
        );
    }

    /**
     * Test public method gregToDeka - Sinchronian day
     *
     * @return void
     */
    public function testGregToDekaSinchronianDay()
    {
        $this->assertEquals(
            '2016-0-2',
            Dekatrian::gregToDeka(2016, 1, 2)
        );
    }

    /**
     * Test public method gregToDeka - Other day
     *
     * @return void
     */
    public function testGregToDekaOtherDay()
    {
        $this->assertEquals(
            '2018-13-28',
            Dekatrian::gregToDeka(2018, 12, 31)
        );
    }
}
