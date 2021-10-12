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
 * @property integer $PromotionalSaleID
 * @property \Rankfoundry\eBaySDK\Trading\Enums\ModifyActionCodeType $Action
 * @property \Rankfoundry\eBaySDK\Trading\Types\ItemIDArrayType $PromotionalSaleItemIDArray
 * @property integer $StoreCategoryID
 * @property integer $CategoryID
 * @property boolean $AllFixedPriceItems
 * @property boolean $AllAuctionItems
 */
class SetPromotionalSaleListingsRequestType extends \Rankfoundry\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PromotionalSaleID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleID'
        ],
        'Action' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Action'
        ],
        'PromotionalSaleItemIDArray' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\ItemIDArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleItemIDArray'
        ],
        'StoreCategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
        ],
        'CategoryID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'AllFixedPriceItems' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AllFixedPriceItems'
        ],
        'AllAuctionItems' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AllAuctionItems'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'SetPromotionalSaleListingsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
