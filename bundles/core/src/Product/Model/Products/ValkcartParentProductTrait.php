<?php

namespace Valkcart\Core\Product\Model\Products;

use Doctrine\ORM\Mapping as ORM;

trait ValkcartParentProductTrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $name = null;
}