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
 * @property string $ItemID
 * @property string $SKU
 * @property \Rankfoundry\eBaySDK\Trading\Types\FeesType $Fees
 * @property \DateTime $StartTime
 * @property \DateTime $EndTime
 * @property string $CategoryID
 * @property string $Category2ID
 * @property \Rankfoundry\eBaySDK\Trading\Enums\DiscountReasonCodeType[] $DiscountReason
 * @property \Rankfoundry\eBaySDK\Trading\Types\ProductSuggestionsType $ProductSuggestions
 * @property \Rankfoundry\eBaySDK\Trading\Types\ListingRecommendationsType $ListingRecommendations
 */
class RelistFixedPriceItemResponseType extends \Rankfoundry\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'Fees' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\FeesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Fees'
        ],
        'StartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartTime'
        ],
        'EndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTime'
        ],
        'CategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'Category2ID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Category2ID'
        ],
        'DiscountReason' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DiscountReason'
        ],
        'ProductSuggestions' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\ProductSuggestionsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductSuggestions'
        ],
        'ListingRecommendations' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\ListingRecommendationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingRecommendations'
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
