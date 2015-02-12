<?php
/**
 * Phergie plugin for Fetch the latest episode of the nerds drinking podcast. (http://www.NerdsDrinking.com)
 *
 * @link https://github.com/phergie/phergie-irc-plugin-react-nerdsdrinking for the canonical source repository
 * @copyright Copyright (c) 2015 JoePFerguson (http://www.JoeFerguson.me)
 * @license http://phergie.org/license BSD License
 * @package Phergie\Irc\Plugin\React\Nerdsdrinking
 */

namespace Phergie\Irc\Plugin\React\Nerdsdrinking;

use Phergie\Irc\Bot\React\AbstractPlugin;
use Phergie\Irc\Bot\React\EventQueueInterface as Queue;
use Phergie\Irc\Plugin\React\Command\CommandEvent as Event;

/**
 * Plugin class.
 *
 * @category Phergie
 * @package Phergie\Irc\Plugin\React\Nerdsdrinking
 */
class Plugin extends AbstractPlugin
{
    private $feedUrl = 'http://nerdsdrinking.libsyn.com/rss';

    /**
     * Accepts plugin configuration.
     *
     * Supported keys:
     *
     *
     *
     * @param array $config
     */
    public function __construct(array $config = array())
    {

    }

    /**
     *
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return array(
            'command.latest' => 'handleLatestCommand',
        );
    }

    /**
     *
     *
     * @param \Phergie\Irc\Plugin\React\Command\CommandEvent $event
     * @param \Phergie\Irc\Bot\React\EventQueueInterface $queue
     */
    public function handleCommand(Event $event, Queue $queue)
    {
        $channel = $event->getSource();
        $message = 'Feed URL: ' . $this->feedUrl;

        return $queue->ircPrivmsg($channel, $message);
    }
}
