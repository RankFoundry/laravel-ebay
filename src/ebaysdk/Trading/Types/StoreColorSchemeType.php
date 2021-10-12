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
 * @property integer $ColorSchemeID
 * @property string $Name
 * @property \Rankfoundry\eBaySDK\Trading\Types\StoreColorType $Color
 * @property \Rankfoundry\eBaySDK\Trading\Types\StoreFontType $Font
 */
class StoreColorSchemeType extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ColorSchemeID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ColorSchemeID'
        ],
        'Name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ],
        'Color' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\StoreColorType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Color'
        ],
        'Font' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\StoreFontType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Font'
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
