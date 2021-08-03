<?php

namespace Mastering\SampleModule\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface{

    /**
     * {@inheritdoc} 
     */
    public function upgrade(SchemaSetupInterface $setup,ModuleContextInterface $context){
    $setup->startSetup();

        if(version_compare($context->getVersion(),'1.0.1','<')){
            $setup->getConnection()->addColumn(
                    $setup->getTable('mastering_sample_item'),
                    'Description',
                    [
                        'type' => Table::TYPE_TEXT,
                        'nullable' => true,
                        'comment' => 'Item Description'
                    ]
                );
        }

        if(version_compare($context->getVersion(),'1.0.2','<')){
            $setup->getConnection()->addColumn(
                    $setup->getTable('sales_order_grid'),
                    'base_tax_amount',
                    [
                        'type' => Table::TYPE_DECIMAL,
                        'nullable' => true,
                        'comment' => 'Base Tax Amount'
                    ]
                );
        }

    $setup->endSetup();
    }
}