<?php

namespace MageMobile\Register\Block;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Submit extends Template
{
    /**
     * Core registry
     * @var Registry
     */
    protected $_coreRegistry;

    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
}
