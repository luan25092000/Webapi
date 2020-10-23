<?php


namespace Magenest\Webapi\Api;


use Magento\Customer\Model\CustomerFactory;
use Magento\Customer\Model\ResourceModel\Customer;

/**
 * Interface CustomerRepositoryInterface
 * @package Magenest\Webapi\Api
 */
interface CustomerRepositoryInterface
{
    /**
     * @param int $id,
     * @return \Magento\Customer\Api\Data\CustomerInterface
     */
    public function getCustomerById($id);
}
