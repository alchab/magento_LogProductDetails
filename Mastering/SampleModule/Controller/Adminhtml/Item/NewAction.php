<?php

namespace Mastering\SampleModule\Controller\Adminhtml\Item;

use Magento\Framework\Controller\ResultFactory;

class NewAction extends \Magento\Backend\App\Action{
    /**
     * {@inheritdoc}
     */
    public function execute(){
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}