<?php

namespace Valkcart\Core\EntityExtensions\Translations\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Valkcart\Core\EntityExtensions\Translations\TranslatableEntity\Attribute\ValkcartTranslatableEntity;

#[AsDoctrineListener(event: 'loadClassMetadata')]
class ValkcartTranslatableListener
{
    public function loadClassMetadata(LoadClassMetadataEventArgs $eventArgs) {
        $classMetadata = $eventArgs->getClassMetadata();
        $reflectionClass = $classMetadata->getReflectionClass();

        $attributes = $reflectionClass->getAttributes(ValkcartTranslatableEntity::class);

        dd($attributes);

//        $classMetadata->mapOneToMany(
//
//        );
    }
}