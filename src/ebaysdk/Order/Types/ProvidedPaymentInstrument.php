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
 * @property \Rankfoundry\eBaySDK\Order\Types\PaymentInstrumentReference $paymentInstrumentReference
 * @property \Rankfoundry\eBaySDK\Order\Types\PaymentMethodBrand $paymentMethodBrand
 * @property \Rankfoundry\eBaySDK\Order\Enums\PaymentMethodTypeEnum $paymentMethodType
 */
class ProvidedPaymentInstrument extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'paymentInstrumentReference' => [
            'type' => 'Rankfoundry\eBaySDK\Order\Types\PaymentInstrumentReference',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentInstrumentReference'
        ],
        'paymentMethodBrand' => [
            'type' => 'Rankfoundry\eBaySDK\Order\Types\PaymentMethodBrand',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentMethodBrand'
        ],
        'paymentMethodType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentMethodType'
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