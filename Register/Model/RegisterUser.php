<?php

namespace MageMobile\Register\Model;

use MageMobile\Register\Api\Data\RegisterUserInterface;
    use Magento\Framework\DataObject\IdentityInterface;
    use Magento\Framework\Model\AbstractModel;

    /**
     * Class File
     * @package MageMobile\Blog\Model
     * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
     */
    class RegisterUser extends AbstractModel implements RegisterUserInterface, IdentityInterface
    {
        /**
         * Cache tag
         */
        const CACHE_TAG = 'magemobile_register_user';

        /**
         * Post Initialization
         * @return void
         */
        protected function _construct()
        {
            $this->_init('MageMobile\Register\Model\ResourceModel\RegisterUser');
        }

        public function getEmail()
        {
            return $this->getData(self::EMAIL);
        }

        public function getUrl()
        {
            return $this->getData(self::URL);
        }

        public function getCreatedAt()
        {
            return $this->getData(self::CREATED_AT);
        }

        public function getAccessToken()
        {
            return $this->getData(self::ACCESS_TOKEN);
        }

        public function getUserId()
        {
            return $this->getData(self::USER_ID);
        }

        public function getUsageCode()
        {
            return $this->getData(self::USAGE_CODE);
        }

        public function getIdentities()
        {
            return [self::CACHE_TAG . '_' . $this->getUserId()];
        }

        public function setEmail($email)
        {
            return $this->setData(self::EMAIL, $email);
        }

        public function setUrl($url)
        {
            return $this->setData(self::URL, $url);
        }

        public function setCreatedAt($createdAt)
        {
            return $this->setData(self::CREATED_AT, $createdAt);
        }

        public function setAccessToken($token)
        {
            return $this->setData(self::ACCESS_TOKEN, $token);
        }

        public function setUserId($id)
        {
            return $this->setData(self::USER_ID, $id);
        }

        public function setUsageCode($code)
        {
            return $this->setData(self::USAGE_CODE, $code);
        }
    }
