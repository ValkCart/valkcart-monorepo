<?php

namespace Valkcart\Core\Product\Model\Products;

use Doctrine\Common\Collections\Collection;
use Valkcart\Core\Category\Model\ValkcartSeoCategoryInterface;

interface ValkcartParentProductInterface
{
    public function getId(): ?int;
    public function getName(): ?string;
    public function setName(string $name): void;

    /**
     * @return Collection, ValkcartSeoCategory
     */
    public function getSeoCategories(): Collection;
    public function addSeoCategory(ValkcartSeoCategoryInterface $seoCategory): void;
    public function removeSeoCategory(ValkcartSeoCategoryInterface $seoCategory): void;
}