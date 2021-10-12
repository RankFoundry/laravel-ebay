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
 * @property \DateTime $ModTimeFrom
 * @property \DateTime $ModTimeTo
 * @property \Rankfoundry\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property boolean $IncludeFinalValueFee
 * @property boolean $IncludeContainingOrder
 * @property \Rankfoundry\eBaySDK\Trading\Types\SKUArrayType $SKUArray
 * @property \Rankfoundry\eBaySDK\Trading\Enums\TransactionPlatformCodeType $Platform
 * @property integer $NumberOfDays
 * @property \Rankfoundry\eBaySDK\Trading\Enums\InventoryTrackingMethodCodeType $InventoryTrackingMethod
 * @property boolean $IncludeCodiceFiscale
 */
class GetSellerTransactionsRequestType extends \Rankfoundry\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ModTimeFrom' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ModTimeFrom'
        ],
        'ModTimeTo' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ModTimeTo'
        ],
        'Pagination' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\PaginationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'IncludeFinalValueFee' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeFinalValueFee'
        ],
        'IncludeContainingOrder' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeContainingOrder'
        ],
        'SKUArray' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\SKUArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKUArray'
        ],
        'Platform' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Platform'
        ],
        'NumberOfDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NumberOfDays'
        ],
        'InventoryTrackingMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InventoryTrackingMethod'
        ],
        'IncludeCodiceFiscale' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeCodiceFiscale'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellerTransactionsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
