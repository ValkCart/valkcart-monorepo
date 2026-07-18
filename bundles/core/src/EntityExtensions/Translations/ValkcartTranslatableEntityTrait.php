<?php

namespace Valkcart\Core\EntityExtensions\Translations;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

trait ValkcartTranslatableEntityTrait
{
    #[ORM\OneToMany(
        targetEntity: ValkcartTranslationsEntityInterface::class,
        mappedBy: 'translation',
        orphanRemoval: true)
    ]
    private Collection $translations;
}