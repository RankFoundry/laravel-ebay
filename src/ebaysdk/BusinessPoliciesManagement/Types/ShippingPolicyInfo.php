<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property string $shippingPolicyName
 * @property string $domesticShippingType
 * @property string $intlShippingType
 * @property integer $dispatchTimeMax
 * @property string $dispatchTimeReason
 * @property string $shippingOption
 * @property string[] $excludeShipToLocation
 * @property \Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\ShippingProfileDiscountInfo $shippingProfileDiscountInfo
 * @property \Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\FreightShipping $freightShipping
 * @property string[] $shipToLocations
 * @property \Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyInfoService[] $domesticShippingPolicyInfoService
 * @property \Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyInfoService[] $intlShippingPolicyInfoService
 * @property \Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\Insurance $insurance
 * @property string $intlRateTable
 * @property string $domesticRateTable
 * @property \Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\Amount $packagingHandlingCosts
 * @property \Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\Amount $internationalPackagingHandlingCosts
 * @property \Rankfoundry\eBaySDK\BusinessPoliciesManagement\Enums\IsoCurrencyCode $shippingPolicyCurrency
 * @property boolean $GlobalShipping
 * @property boolean $EligibleForPickupDropOff
 */
class ShippingPolicyInfo extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'shippingPolicyName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingPolicyName'
        ],
        'domesticShippingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'domesticShippingType'
        ],
        'intlShippingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'intlShippingType'
        ],
        'dispatchTimeMax' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dispatchTimeMax'
        ],
        'dispatchTimeReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dispatchTimeReason'
        ],
        'shippingOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingOption'
        ],
        'excludeShipToLocation' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'excludeShipToLocation'
        ],
        'shippingProfileDiscountInfo' => [
            'type' => 'Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\ShippingProfileDiscountInfo',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingProfileDiscountInfo'
        ],
        'freightShipping' => [
            'type' => 'Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\FreightShipping',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'freightShipping'
        ],
        'shipToLocations' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shipToLocations'
        ],
        'domesticShippingPolicyInfoService' => [
            'type' => 'Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyInfoService',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'domesticShippingPolicyInfoService'
        ],
        'intlShippingPolicyInfoService' => [
            'type' => 'Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\ShippingPolicyInfoService',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'intlShippingPolicyInfoService'
        ],
        'insurance' => [
            'type' => 'Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\Insurance',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'insurance'
        ],
        'intlRateTable' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'intlRateTable'
        ],
        'domesticRateTable' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'domesticRateTable'
        ],
        'packagingHandlingCosts' => [
            'type' => 'Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'packagingHandlingCosts'
        ],
        'internationalPackagingHandlingCosts' => [
            'type' => 'Rankfoundry\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'internationalPackagingHandlingCosts'
        ],
        'shippingPolicyCurrency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingPolicyCurrency'
        ],
        'GlobalShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalShipping'
        ],
        'EligibleForPickupDropOff' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EligibleForPickupDropOff'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
