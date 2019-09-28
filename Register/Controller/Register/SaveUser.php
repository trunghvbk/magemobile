<?php

namespace MageMobile\Register\Controller\Register;

use Exception as ExceptionAlias;
use MageMobile\Register\Model\RegisterUserFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class SaveUser extends Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    protected $registerUserFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     *
     * @param RegisterUserFactory $registerUserFactory
     * @codeCoverageIgnore
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        RegisterUserFactory $registerUserFactory
    ) {
        parent::__construct(
            $context
        );
        $this->resultPageFactory = $resultPageFactory;
        $this->registerUserFactory = $registerUserFactory;
    }

    public function execute()
    {
        $user = $this->registerUserFactory->create();
        $post = $this->getRequest()->getPostValue();
        $user->setEmail($post["email"]);
        $user->setUrl($post["url"]);
        $user->setAccessToken(($post["access_token"]));
        $user->setUsageCode($this->getRandomUsageCode());
        $user->save();
    }

    private function getRandomUsageCode() {
        $characters = '0123456789';
        $randomString = '';

        for ($i = 0; $i < 6; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}
