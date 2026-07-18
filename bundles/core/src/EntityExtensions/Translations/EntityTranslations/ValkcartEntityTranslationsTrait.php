<?php

namespace Valkcart\Core\EntityExtensions\Translations\EntityTranslations;

use Doctrine\ORM\Mapping as ORM;
use Valkcart\Core\EntityExtensions\Translations\TranslatableEntity\ValkcartTranslatableEntityInterface;

trait ValkcartEntityTranslationsTrait
{
    #[ORM\Column(type: 'string', length: 16)]
    public string $locale;

    #[ORM\ManyToOne(
        targetEntity: ValkcartTranslatableEntityInterface::class,
        inversedBy: 'translations',
    )]
    private ValkcartTranslatableEntityInterface $translatableEntity;

    #[ORM\Column(type: 'string', length: 255)]
    public string $name;

    #[ORM\Column(type: 'string', length: 255)]
    public string $slug;

    #[ORM\Column(type: 'text', nullable: true)]
    public ?string $description = null;
}