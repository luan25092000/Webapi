<?php


namespace Magenest\Webapi\Model\Data;


use Magenest\Webapi\Api\Data\CustomerInterface;
use Magento\Framework\DataObject;

class Customer extends DataObject implements CustomerInterface
{
   public function getId($id)
   {
       return $id;
   }
}
