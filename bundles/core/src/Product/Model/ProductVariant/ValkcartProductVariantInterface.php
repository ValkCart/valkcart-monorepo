<?php

namespace Valkcart\Core\Product\Model\ProductVariant;

use Valkcart\Core\Product\Model\ParentProduct\ValkcartParentProductInterface;

interface ValkcartProductVariantInterface
{
    public ValkcartParentProductInterface $parentProduct { get; set; }
}