<?php
/**
 * Vitortec.com Dekaph
 *
 * PHP Version 7.0
 *
 * @package   Vitorteccom\Dekaph
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2011-2018 Vitortec.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version   GIT: <git_id>
 * @see       https://devs.vitortec.com/dekaph Documentation of Dekaph
 */

namespace Vitorteccom\Dekaph;

use PHPUnit\Framework\TestCase;
use Vitorteccom\Dekaph\Dekatrian;

/**
 * DekatrianTest class
 *
 * @package   Vitorteccom\Dekaph\DekatrianTest
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2011-2018 Vitortec.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @see       https://devs.vitortec.com/dekaph Documentation of Dekaph
 */
class DekatrianTest extends TestCase
{
    /**
     * Test dekatoGreg metohd
     *
     * @return void
     */
    public function testDekatoGreg()
    {
        $dekaph = new Dekatrian();

        $this->assertEquals(
            "2018-1-1",
            $dekaph->dekatoGreg(2018, 0, 1)
        );

        $this->assertEquals(
            "2016-1-2",
            $dekaph->dekatoGreg(2016, 0, 2)
        );

        $this->assertEquals(
            "2018-12-31",
            $dekaph->dekatoGreg(2018, 13, 28)
        );

        $this->assertFalse($dekaph->dekatoGreg(2018, 0, 2));
        $this->assertFalse($dekaph->dekatoGreg(2018, 14, 2));
    }

    /**
     * Test gregToDeka metohd
     *
     * @return void
     */
    public function testGregToDeka()
    {
        $dekaph = new Dekatrian();

        $this->assertEquals(
            "2018-0-1",
            $dekaph->gregToDeka(2018, 1, 1)
        );

        $this->assertEquals(
            "2016-0-2",
            $dekaph->gregToDeka(2016, 1, 2)
        );

        $this->assertEquals(
            "2018-13-28",
            $dekaph->gregToDeka(2018, 12, 31)
        );

        $this->assertFalse($dekaph->gregToDeka(2018, 13, 1));
    }
}
