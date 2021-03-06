<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bakeway\Import\Model\Validator;

use Magento\Framework\Validator\AbstractValidator;
use Bakeway\Import\Model\Sellerimport\RowValidatorInterface;

abstract class AbstractImportValidator extends AbstractValidator implements RowValidatorInterface
{
    /**
     * @var \Magento\CatalogImportExport\Model\Import\Product
     */
    protected $context;

    /**
     * @param \Magento\CatalogImportExport\Model\Import\Product $context
     * @return $this
     */
    public function init($context)
    {
        $this->context = $context;
        return $this;
    }
}
