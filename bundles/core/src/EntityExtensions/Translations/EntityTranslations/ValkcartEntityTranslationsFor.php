<?php

namespace Valkcart\Core\EntityExtensions\Translations\EntityTranslations;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class ValkcartEntityTranslationsFor
{
    public function __construct(
        public readonly string $translationsClass
    )
    {
    }
}