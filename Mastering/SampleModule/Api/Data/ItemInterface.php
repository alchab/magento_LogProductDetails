<?php

namespace Mastering\SampleModule\Api\Data;

interface ItemInterface{
    /**
     * SampleModule Api Data
     *  
     * @return string 
     * */
    public function getName();
    /** 
     * SampleModule Api Data
     * 
     * @return string|null 
     * */
    public function getDescription();
}