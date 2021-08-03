<?php
namespace Mastering\SampleModuleProduct\Block\Product;

class View extends \Magento\Catalog\Block\Product\View
{
   /**
    * @return $this
    */
    protected function _afterLoad()
    {
        // logging to test override    
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
        $logger->debug(__METHOD__ . ' - ' . __LINE__);
        return parent::_afterLoad();
    }
}