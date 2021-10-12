<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\RelatedItemsManagement\Types;

/**
 *
 * @property \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\Bundle[] $bundle
 */
class UpdateBundlesRequest extends \Rankfoundry\eBaySDK\RelatedItemsManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'bundle' => [
            'type' => 'Rankfoundry\eBaySDK\RelatedItemsManagement\Types\Bundle',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'bundle'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/sellerinventory/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'updateBundlesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
