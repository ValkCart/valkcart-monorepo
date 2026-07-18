<?php

namespace Valkcart\Core\EntityExtensions\Translations\TranslatableEntity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Valkcart\Core\EntityExtensions\Translations\EntityTranslations\ValkcartEntityTranslationsInterface;

trait ValkcartTranslatableEntityTrait
{
    #[ORM\OneToMany(
        targetEntity: ValkcartEntityTranslationsInterface::class,
        mappedBy: 'translation',
        orphanRemoval: true)
    ]
    private Collection $translations;
}