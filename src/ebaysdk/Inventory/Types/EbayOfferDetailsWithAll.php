<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Inventory\Types;

/**
 *
 * @property integer $availableQuantity
 * @property string $categoryId
 * @property \Rankfoundry\eBaySDK\Inventory\Enums\FormatTypeEnum $format
 * @property \Rankfoundry\eBaySDK\Inventory\Types\ListingDetails $listing
 * @property string $listingDescription
 * @property \Rankfoundry\eBaySDK\Inventory\Types\ListingPolicies $listingPolicies
 * @property \Rankfoundry\eBaySDK\Inventory\Enums\MarketplaceEnum $marketplaceId
 * @property string $merchantLocationKey
 * @property string $offerId
 * @property \Rankfoundry\eBaySDK\Inventory\Types\PricingSummary $pricingSummary
 * @property integer $quantityLimitPerBuyer
 * @property string $sku
 * @property \Rankfoundry\eBaySDK\Inventory\Enums\OfferStatusEnum $status
 * @property string[] $storeCategoryNames
 * @property \Rankfoundry\eBaySDK\Inventory\Types\Tax $tax
 */
class EbayOfferDetailsWithAll extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'availableQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'availableQuantity'
        ],
        'categoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryId'
        ],
        'format' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'format'
        ],
        'listing' => [
            'type' => 'Rankfoundry\eBaySDK\Inventory\Types\ListingDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listing'
        ],
        'listingDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingDescription'
        ],
        'listingPolicies' => [
            'type' => 'Rankfoundry\eBaySDK\Inventory\Types\ListingPolicies',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingPolicies'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'merchantLocationKey' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'merchantLocationKey'
        ],
        'offerId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offerId'
        ],
        'pricingSummary' => [
            'type' => 'Rankfoundry\eBaySDK\Inventory\Types\PricingSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pricingSummary'
        ],
        'quantityLimitPerBuyer' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantityLimitPerBuyer'
        ],
        'sku' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sku'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ],
        'storeCategoryNames' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'storeCategoryNames'
        ],
        'tax' => [
            'type' => 'Rankfoundry\eBaySDK\Inventory\Types\Tax',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'tax'
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
