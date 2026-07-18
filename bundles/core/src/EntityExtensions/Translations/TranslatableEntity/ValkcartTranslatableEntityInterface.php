<?php

namespace Valkcart\Core\EntityExtensions\Translations\TranslatableEntity;

use Doctrine\Common\Collections\Collection;
use Valkcart\Core\EntityExtensions\Translations\EntityTranslations\ValkcartEntityTranslationsInterface;

interface ValkcartTranslatableEntityInterface
{
    public ValkcartEntityTranslationsInterface $translations {
        get;
    }
}