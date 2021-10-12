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
 * @property \Rankfoundry\eBaySDK\Trading\Enums\SellingManagerAlertTypeCodeType $AlertType
 * @property \Rankfoundry\eBaySDK\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType $SoldAlert
 * @property \Rankfoundry\eBaySDK\Trading\Enums\SellingManagerInventoryPropertyTypeCodeType $InventoryAlert
 * @property \Rankfoundry\eBaySDK\Trading\Enums\SellingManagerAutomationPropertyTypeCodeType $AutomationAlert
 * @property \Rankfoundry\eBaySDK\Trading\Enums\SellingManagerPaisaPayPropertyTypeCodeType $PaisaPayAlert
 * @property \Rankfoundry\eBaySDK\Trading\Enums\SellingManagerGeneralPropertyTypeCodeType $GeneralAlert
 * @property integer $DurationInDays
 * @property integer $Count
 */
class SellingManagerAlertType extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AlertType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AlertType'
        ],
        'SoldAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldAlert'
        ],
        'InventoryAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InventoryAlert'
        ],
        'AutomationAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutomationAlert'
        ],
        'PaisaPayAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayAlert'
        ],
        'GeneralAlert' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GeneralAlert'
        ],
        'DurationInDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DurationInDays'
        ],
        'Count' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Count'
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