<?php

namespace Valkcart\Core\EntityExtensions\Translations;

use Doctrine\Common\Collections\Collection;

interface ValkcartTranslatableEntityInterface
{
    public Collection $translations { get; }
}