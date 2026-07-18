<?php

namespace Valkcart\Core\EntityExtensions\Translations\TranslatableEntity;

use Doctrine\Common\Collections\Collection;

interface ValkcartTranslatableEntityInterface
{
    public Collection $translations { get; }
}