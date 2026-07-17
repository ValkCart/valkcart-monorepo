<?php

namespace Valkcart\Core\EntityExtensions\Translations;

interface ValkcartTranslationInterface
{
    public string $locale {
        get;
        set;
    }

    public ValkcartTranslatableInterface $translatableEntity {
        get;
        set;
    }
}