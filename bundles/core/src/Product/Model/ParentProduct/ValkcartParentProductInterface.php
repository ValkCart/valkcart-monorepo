<?php

namespace Valkcart\Core\Product\Model\ParentProduct;

use Doctrine\Common\Collections\Collection;
use Valkcart\Core\EntityExtensions\Translations\TranslatableEntity\ValkcartTranslatableEntityInterface;

interface ValkcartParentProductInterface extends
    ValkcartTranslatableEntityInterface
{

    public Collection $productVariants { get; }

//    /**
//     * @return Collection, ValkcartSeoCategory
//     */
//    public function getSeoCategories(): Collection;
//    public function addSeoCategory(ValkcartSeoCategoryInterface $seoCategory): void;
//    public function removeSeoCategory(ValkcartSeoCategoryInterface $seoCategory): void;
}