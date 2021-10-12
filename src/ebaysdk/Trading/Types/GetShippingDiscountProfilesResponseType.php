<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Trading\Types;

/**
 *
 * @property \Rankfoundry\eBaySDK\Trading\Enums\CurrencyCodeType $CurrencyID
 * @property \Rankfoundry\eBaySDK\Trading\Types\FlatShippingDiscountType $FlatShippingDiscount
 * @property \Rankfoundry\eBaySDK\Trading\Types\CalculatedShippingDiscountType $CalculatedShippingDiscount
 * @property boolean $PromotionalShippingDiscount
 * @property \Rankfoundry\eBaySDK\Trading\Types\CalculatedHandlingDiscountType $CalculatedHandlingDiscount
 * @property \Rankfoundry\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType $PromotionalShippingDiscountDetails
 * @property \Rankfoundry\eBaySDK\Trading\Enums\CombinedPaymentPeriodCodeType $CombinedDuration
 */
class GetShippingDiscountProfilesResponseType extends \Rankfoundry\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CurrencyID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CurrencyID'
        ],
        'FlatShippingDiscount' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\FlatShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FlatShippingDiscount'
        ],
        'CalculatedShippingDiscount' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\CalculatedShippingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CalculatedShippingDiscount'
        ],
        'PromotionalShippingDiscount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscount'
        ],
        'CalculatedHandlingDiscount' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\CalculatedHandlingDiscountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CalculatedHandlingDiscount'
        ],
        'PromotionalShippingDiscountDetails' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\PromotionalShippingDiscountDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalShippingDiscountDetails'
        ],
        'CombinedDuration' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CombinedDuration'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
