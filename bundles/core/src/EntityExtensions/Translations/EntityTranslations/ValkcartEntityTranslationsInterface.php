<?php

namespace Valkcart\Core\EntityExtensions\Translations\EntityTranslations;

use Valkcart\Core\EntityExtensions\Translations\TranslatableEntity\ValkcartTranslatableEntityInterface;

interface ValkcartEntityTranslationsInterface
{
    public int $id {get;}
    public string $locale { get; set; }

    public ValkcartTranslatableEntityInterface $translatableEntity { get; set; }

    public string $name { get; set; }

    public string $slug { get; set; }

    public ?string $description { get; set; }
}