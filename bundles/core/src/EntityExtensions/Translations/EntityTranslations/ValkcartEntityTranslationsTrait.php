<?php

namespace Valkcart\Core\EntityExtensions\Translations;

use Doctrine\ORM\Mapping as ORM;
use Valkcart\Core\EntityExtensions\Translations\TranslatableEntity\ValkcartTranslatableEntityInterface;

trait ValkcartEntityTranslationsTrait
{
    #[ORM\Column(type: 'string', length: 16)]
    private string $locale;

    #[ORM\ManyToOne(
        targetEntity: ValkcartTranslatableEntityInterface::class,
        inversedBy: 'translations',
    )]
    private ValkcartTranslatableEntityInterface $translatableEntity;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name;

    #[ORM\Column(type: 'string', length: 255)]
    private string $slug;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;
}