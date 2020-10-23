<?php


namespace Magenest\Webapi\Model;

use Magenest\Webapi\Api\CustomerRepositoryInterface;
use Magenest\Webapi\Api\Data\CustomerInterface;
use Magento\Customer\Model\CustomerFactory;
use Magento\Customer\Model\ResourceModel\Customer;

/**
 * Class CustomerRepository
 * @package Magenest\Webapi\Model
 */
class CustomerRepository implements CustomerRepositoryInterface
{
    /**
     * @var CustomerInterface
     */
    private $customerInterface;
    /**
     * @var CustomerFactory
     */
    private $customerFactory;
    /**
     * @var Customer
     */
    private $customer;

    /**
     * CustomerRepository constructor.
     * @param CustomerInterface $customerInterface
     * @param CustomerFactory $customerFactory
     * @param Customer $customer
     */
    public function __construct(CustomerInterface $customerInterface, CustomerFactory $customerFactory, Customer $customer)
    {
        $this->customerInterface = $customerInterface;
        $this->customerFactory = $customerFactory;
        $this->customer = $customer;
    }


    /**
     * @param int $id
     * @return \Magento\Customer\Api\Data\CustomerInterface
     */
    public function getCustomerById($id)
    {
        $customerModel = $this->customerFactory->create()->load($id);
        return $customerModel->getDataModel();
    }
}
