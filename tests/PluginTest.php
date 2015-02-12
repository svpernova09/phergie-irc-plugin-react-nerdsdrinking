<?php
/**
 * Phergie plugin for Fetch the latest episode of the nerds drinking podcast. (http://www.NerdsDrinking.com)
 *
 * @link https://github.com/phergie/phergie-irc-plugin-react-nerdsdrinking for the canonical source repository
 * @copyright Copyright (c) 2015 JoePFerguson (http://www.JoeFerguson.me)
 * @license http://phergie.org/license BSD License
 * @package Phergie\Irc\Plugin\React\Nerdsdrinking
 */

namespace Phergie\Irc\Tests\Plugin\React\Nerdsdrinking;

use Phake;
use Phergie\Irc\Bot\React\EventQueueInterface as Queue;
use Phergie\Irc\Plugin\React\Command\CommandEvent as Event;
use Phergie\Irc\Plugin\React\Nerdsdrinking\Plugin;

/**
 * Tests for the Plugin class.
 *
 * @category Phergie
 * @package Phergie\Irc\Plugin\React\Nerdsdrinking
 */
class PluginTest extends \PHPUnit_Framework_TestCase
{


    /**
     * Tests that getSubscribedEvents() returns an array.
     */
    public function testGetSubscribedEvents()
    {
        $plugin = new Plugin;
        $this->assertInternalType('array', $plugin->getSubscribedEvents());
    }
}
