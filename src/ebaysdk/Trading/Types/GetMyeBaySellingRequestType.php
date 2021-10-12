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
 * @property \Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType $ScheduledList
 * @property \Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType $ActiveList
 * @property \Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType $SoldList
 * @property \Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType $UnsoldList
 * @property \Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType $DeletedFromSoldList
 * @property \Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType $DeletedFromUnsoldList
 * @property \Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType $SellingSummary
 * @property boolean $HideVariations
 */
class GetMyeBaySellingRequestType extends \Rankfoundry\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ScheduledList' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduledList'
        ],
        'ActiveList' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActiveList'
        ],
        'SoldList' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldList'
        ],
        'UnsoldList' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnsoldList'
        ],
        'DeletedFromSoldList' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromSoldList'
        ],
        'DeletedFromUnsoldList' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromUnsoldList'
        ],
        'SellingSummary' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\ItemListCustomizationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingSummary'
        ],
        'HideVariations' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HideVariations'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetMyeBaySellingRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
