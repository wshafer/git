<?php
/**
 * Test for the Rebase command
 *
 * This file contains test for the Rebase command
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

use Reliv\Git\Command\RebaseCommand;
use Reliv\GitTest\Unit\UnitBase;

require_once __DIR__ . '/../UnitBase.php';

/**
 * Test for the Rebase command
 *
 * Test for the Rebase command
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

class RebaseCommandTest extends UnitBase
{
    /** @var \Reliv\Git\Command\RebaseCommand */
    protected $command;

    /**
     * Test the constructor
     *
     * @return void
     *
     * @covers \Reliv\Git\Command\RebaseCommand
     */
    public function testConstructor()
    {
        $this->assertTrue($this->command instanceof RebaseCommand);
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
     * @covers \Reliv\Git\Command\RebaseCommand
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
     * @covers \Reliv\Git\Command\RebaseCommand
     */
    public function testGetCommand()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
