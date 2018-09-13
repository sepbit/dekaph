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

use PHPUnit\Framework\TestCase;
use Vitorteccom\Dekaph\Dekatrian;

/**
 * Some methods to test the methods of class Dekatrian
 */
class DekatrianTest extends TestCase
{

    /**
     * Test dekaToGreg method
     *
     * @return void
     */
    public function testDekaToGreg()
    {
        $this->assertEquals(
            '2018-1-1',
            Dekatrian::dekaToGreg(2018, 0, 1)
        );

        $this->assertEquals(
            '2016-1-2',
            Dekatrian::dekaToGreg(2016, 0, 2)
        );

        $this->assertEquals(
            '2018-12-31',
            Dekatrian::dekaToGreg(2018, 13, 28)
        );

        $this->assertFalse(Dekatrian::dekaToGreg(2018, 0, 2));
        $this->assertFalse(Dekatrian::dekaToGreg(2018, 14, 2));
    }

    /**
     * Test gregToDeka method
     *
     * @return void
     */
    public function testGregToDeka()
    {
        $this->assertEquals(
            '2018-0-1',
            Dekatrian::gregToDeka(2018, 1, 1)
        );

        $this->assertEquals(
            '2016-0-2',
            Dekatrian::gregToDeka(2016, 1, 2)
        );

        $this->assertEquals(
            '2018-13-28',
            Dekatrian::gregToDeka(2018, 12, 31)
        );

        $this->assertFalse(Dekatrian::gregToDeka(2018, 13, 1));
    }
}
