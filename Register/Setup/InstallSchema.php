<?php

namespace MageMobile\Register\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

/**
 * Class InstallSchema
 *
 * @package MageMobile\Blog\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * Install Blog Posts table
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('magemobile_register_user');

        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table = $setup->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'user_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'ID'
                )
                ->addColumn(
                    'email',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Email'
                )
                ->addColumn(
                    'url',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Website URL'
                )
                ->addColumn(
                    'access_token',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Access Token'
                )
                ->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                    'Created At'
                )
                ->addColumn(
                    'usage_code',
                    Table::TYPE_INTEGER,
                    null,
                    ['nullable' => false],
                    'Usage Code'
                )
                ->setComment('MageMobile Register Users');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}
