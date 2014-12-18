<?php
/**
 * Test for the Rm command
 *
 * This file contains test for the Rm command
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

use Reliv\Git\Command\RmCommand;

require_once __DIR__ . '/Base.php';

/**
 * Test for the Rm command
 *
 * Test for the Rm command
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

class RmCommandTest extends Base
{
    /** @var \Reliv\Git\Command\RmCommand */
    protected $command;

    /**
     * Test the constructor
     *
     * @return void
     *
     * @covers \Reliv\Git\Command\RmCommand
     */
    public function testConstructor()
    {
        $this->assertTrue($this->command instanceof RmCommand);
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
     * @covers \Reliv\Git\Command\RmCommand
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
     * @covers \Reliv\Git\Command\RmCommand
     */
    public function testGetCommand()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}