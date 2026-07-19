<?php

namespace Valkcart\Core\EntityExtensions\Translations\TranslatableEntity;

use Attribute;

#[Attribute(\Attribute::TARGET_CLASS)]
final class ValkcartTranslatableEntity
{
    public function __construct(
        public readonly string $translatableClass,
    )
    {
    }
}