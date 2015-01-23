<?php
/**
 * Test for the Branch command
 *
 * This file contains test for the Branch command
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

namespace Reliv\GitTest\Integration\Command;

use Reliv\Git\Command\BranchCommand;
use Reliv\GitTest\Integration\IntegrationBase;

require_once __DIR__ . '/../IntegrationBase.php';

/**
 * Test for the Branch command
 *
 * Test for the Branch command
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

class BranchCommandTest extends IntegrationBase
{
    /** @var \Reliv\Git\Command\BranchCommand */
    protected $command;

    /**
     * Test Execution of command
     *
     * @return void
     *
     * @covers \Reliv\Git\Command\BranchCommand
     */
    public function testExecute()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
