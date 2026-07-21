<?php

namespace Valkcart\Core\EntityExtensions\Translations\EntityTranslations\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final readonly class ValkcartEntityTranslationsFor
{
    public function __construct(
        public string $translationsClass
    )
    {
    }
}