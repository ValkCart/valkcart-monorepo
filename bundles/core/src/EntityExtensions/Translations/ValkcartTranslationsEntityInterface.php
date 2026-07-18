<?php

namespace Valkcart\Core\EntityExtensions\Translations;

use Doctrine\Common\Collections\Collection;

interface ValkcartTranslationsEntityInterface
{
    public string $locale { get; set; }

    public ValkcartTranslatableEntityInterface $translatableEntity { get; set; }

    public string $name { get; set; }

    public string $slug { get; set; }

    public ?string $description { get; set; }
}