<?php

namespace Mastering\SampleModule\Api;

use Mastering\SampleModule\Api\Data\ItemInterface;

interface ItemRepositoryInterface{
    /**
     * return \Matering\SampleModule\Api\Data\ItemInterface[]  
     * 
     * @return ItemInterface[]  
     */
    public function getList();
}