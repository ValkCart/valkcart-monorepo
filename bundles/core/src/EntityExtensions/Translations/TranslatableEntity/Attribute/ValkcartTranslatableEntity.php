<?php

namespace Valkcart\Core\EntityExtensions\Translations\TranslatableEntity\Attribute;

use Attribute;

#[Attribute(\Attribute::TARGET_CLASS)]
final readonly class ValkcartTranslatableEntity
{
    public function __construct(
        public string $translatableClass,
    )
    {
    }
}