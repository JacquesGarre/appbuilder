<?php

namespace App\EventListener;

use App\Entity\Application;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\String\Slugger\AsciiSlugger;



class DatabaseCreator
{

    public function prePersist(LifecycleEventArgs $args): void
    {
        $application = $args->getObject();
        if (!$application instanceof Application) {
            return;
        }

        // Check if database name doesn't exist already

        // Check if database user doesn't exist already
        
    }
}