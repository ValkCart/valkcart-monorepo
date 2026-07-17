<?php

namespace Valkcart\Core\EntityExtensions\Translations;

interface ValkcartTranslatableInterface
{
    public ValkcartTranslationInterface $translations {
        get;
        set;
    }
}