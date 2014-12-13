<?php
/**
 * Test for the Merge command
 *
 * This file contains test for the Merge command
 *
 * PHP version 5.3
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

namespace GitTest\Integration\Command;

use Git\Command\Merge;

require_once __DIR__ . '/Base.php';

/**
 * Test for the Merge command
 *
 * Test for the Merge command
 *
 * PHP version 5.3
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

class MergeTest extends Base
{
    /** @var \Git\Command\Merge */
    protected $command;

    /**
     * Test Execution of command
     *
     * @return void
     *
     * @covers \Git\Command\Merge
     */
    public function testExecute()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
