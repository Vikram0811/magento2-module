<?php
namespace Vikram\Blog\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Vikram\Blog\Model\Post', 'Vikram\Blog\Model\ResourceModel\Post');
    }
}