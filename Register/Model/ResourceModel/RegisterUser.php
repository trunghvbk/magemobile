<?php

namespace MageMobile\Register\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class RegisterUser extends AbstractDb
{
    /**
     * Post Abstract Resource Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('magemobile_register_user', 'user_id');
    }
}
