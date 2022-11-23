<?php

namespace App\EventListener;

use App\Entity\Field;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\String\Slugger\AsciiSlugger;



class FieldNameFormatter
{

    public function prePersist(LifecycleEventArgs $args): void
    {
        $field = $args->getObject();
        if (!$field instanceof Field) {
            return;
        }

        // Sets name as a slug of title
        $slugger = new AsciiSlugger();
        $name = $slugger->slug($field->getLabel())->lower();
        $field->setName($name);

    }
}