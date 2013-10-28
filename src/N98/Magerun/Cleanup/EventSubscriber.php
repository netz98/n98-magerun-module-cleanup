<?php

namespace N98\Magerun\Cleanup;

use Symfony\Component\Console\Event\ConsoleEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use N98\Util\Filesystem;

class EventSubscriber implements EventSubscriberInterface
{   
    /** 
    * Returns an array of event names this subscriber wants to listen to.
    *
    * @return array The event names to listen to
    *
    * @api
    */
    public static function getSubscribedEvents()
    {   
        return array('console.terminate' => 'removeTempFolder');
    }
    public function removeTempFolder(ConsoleEvent $event)
    {
        if (is_dir('/tmp/magento')) {
            $filesystem = new Filesystem();
            $filesystem->recursiveRemoveDirectory('/tmp/magento');
            $event->getOutput()->writeln('<comment>Removed /tmp/magento folder</comment>');
        }
    }
}
