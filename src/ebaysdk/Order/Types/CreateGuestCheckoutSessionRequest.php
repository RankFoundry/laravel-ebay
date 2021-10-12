<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Order\Types;

/**
 *
 * @property string $contactEmail
 * @property string $contactFirstName
 * @property string $contactLastName
 * @property \Rankfoundry\eBaySDK\Order\Types\CreditCard $creditCard
 * @property \Rankfoundry\eBaySDK\Order\Types\LineItemInput[] $lineItemInputs
 * @property \Rankfoundry\eBaySDK\Order\Types\ShippingAddress $shippingAddress
 */
class CreateGuestCheckoutSessionRequest extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'contactEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'contactEmail'
        ],
        'contactFirstName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'contactFirstName'
        ],
        'contactLastName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'contactLastName'
        ],
        'creditCard' => [
            'type' => 'Rankfoundry\eBaySDK\Order\Types\CreditCard',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creditCard'
        ],
        'lineItemInputs' => [
            'type' => 'Rankfoundry\eBaySDK\Order\Types\LineItemInput',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'lineItemInputs'
        ],
        'shippingAddress' => [
            'type' => 'Rankfoundry\eBaySDK\Order\Types\ShippingAddress',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingAddress'
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