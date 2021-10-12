<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Fulfillment\Types;

/**
 *
 * @property \Rankfoundry\eBaySDK\Fulfillment\Types\Amount $importCharges
 * @property \Rankfoundry\eBaySDK\Fulfillment\Types\Amount $shippingCost
 * @property \Rankfoundry\eBaySDK\Fulfillment\Types\Amount $shippingIntermediationFee
 * @property \Rankfoundry\eBaySDK\Fulfillment\Types\Amount $discountAmount
 */
class DeliveryCost extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'importCharges' => [
            'type' => 'Rankfoundry\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'importCharges'
        ],
        'shippingCost' => [
            'type' => 'Rankfoundry\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCost'
        ],
        'shippingIntermediationFee' => [
            'type' => 'Rankfoundry\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingIntermediationFee'
        ],
        'discountAmount' => [
            'type' => 'Rankfoundry\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'discountAmount'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
