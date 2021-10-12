<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Account\Types;

/**
 *
 * @property \Rankfoundry\eBaySDK\Account\Types\Amount $amount
 * @property \Rankfoundry\eBaySDK\Account\Types\TimeDuration $dueIn
 * @property \Rankfoundry\eBaySDK\Account\Types\PaymentMethod[] $paymentMethods
 */
class Deposit extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'amount' => [
            'type' => 'Rankfoundry\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'amount'
        ],
        'dueIn' => [
            'type' => 'Rankfoundry\eBaySDK\Account\Types\TimeDuration',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dueIn'
        ],
        'paymentMethods' => [
            'type' => 'Rankfoundry\eBaySDK\Account\Types\PaymentMethod',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'paymentMethods'
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