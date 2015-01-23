<?php
/**
 * Test for the Mv command
 *
 * This file contains test for the Mv command
 *
 * PHP version 5.4
 *
 * LICENSE: BSD
 *
 * @category  Reliv
 * @package   Git
 * @author    Westin Shafer <wshafer@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   GIT: <git_id>
 * @link      https://github.com/reliv
 */

namespace Reliv\GitTest\Unit\Command;

use Reliv\Git\Command\MvCommand;
use Reliv\GitTest\Unit\UnitBase;

require_once __DIR__ . '/../UnitBase.php';

/**
 * Test for the Mv command
 *
 * Test for the Mv command
 *
 * PHP version 5.4
 *
 * LICENSE: BSD
 *
 * @category  Reliv
 * @package   Git
 * @author    Westin Shafer <wshafer@relivinc.com>
 * @copyright 2012 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: 1.0
 * @link      https://github.com/reliv
 */

class MvCommandTest extends UnitBase
{
    /** @var \Reliv\Git\Command\MvCommand */
    protected $command;

    /**
     * Test the constructor
     *
     * @return void
     *
     * @covers \Reliv\Git\Command\MvCommand
     */
    public function testConstructor()
    {
        $this->assertTrue($this->command instanceof MvCommand);
        $this->assertInstanceOf(
            '\Reliv\Git\Command\CommandInterface',
            \PHPUnit_Framework_Assert::readAttribute($this->command, 'wrappedCommand')
        );
    }

    /**
     * Test the class default values
     *
     * @return void
     *
     * @covers \Reliv\Git\Command\MvCommand
     */
    public function testDefaults()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * Test the get command
     *
     * @return void
     *
     * @covers \Reliv\Git\Command\MvCommand
     */
    public function testGetCommand()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
