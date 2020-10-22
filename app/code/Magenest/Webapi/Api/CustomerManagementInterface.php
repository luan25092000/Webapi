<?php


namespace Magenest\Webapi\Api;


interface CustomerManagementInterface
{
    /**
     * @param int $id
     * @return string
     */
    public function getCustomerById($id);
}
