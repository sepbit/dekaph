<?php
/**
 * DekatrianTest.php
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

use PHPUnit\Framework\TestCase;
use Vitorteccom\Dekaph\Dekatrian;

/**
 * Some methods to test the methods of class Dekatrian
 *
 * @package   Vitorteccom\Dekaph\DekatrianTest
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2011-2018 Vitortec.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0-or-later
 * @version   GIT: <git_id>
 * @see       https://devs.vitortec.com/dekaph Documentation of Dekaph
 */
class DekatrianTest extends TestCase
{

    /**
     * Test dekatoGreg method
     *
     * @return void
     */
    public function testDekatoGreg()
    {
        $this->assertEquals(
            '2018-1-1',
            Dekatrian::dekatoGreg(2018, 0, 1)
        );

        $this->assertEquals(
            '2016-1-2',
            Dekatrian::dekatoGreg(2016, 0, 2)
        );

        $this->assertEquals(
            '2018-12-31',
            Dekatrian::dekatoGreg(2018, 13, 28)
        );

        $this->assertFalse(Dekatrian::dekatoGreg(2018, 0, 2));
        $this->assertFalse(Dekatrian::dekatoGreg(2018, 14, 2));
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
