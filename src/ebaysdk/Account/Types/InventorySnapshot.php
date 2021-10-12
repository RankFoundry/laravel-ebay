<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Account\Types;

/**
 *
 * @property \Rankfoundry\eBaySDK\Account\Types\Amount $cumulativeInventoryValue
 * @property integer $cumulativeQuantity
 * @property \Rankfoundry\eBaySDK\Account\Types\LookbackPeriod $lookbackPeriod
 * @property integer $maxAvailableQuantity
 * @property \Rankfoundry\eBaySDK\Account\Types\Amount $maxInventoryValue
 * @property integer $minAvailableQuantity
 * @property \Rankfoundry\eBaySDK\Account\Types\Amount $minInventoryValue
 */
class InventorySnapshot extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'cumulativeInventoryValue' => [
            'type' => 'Rankfoundry\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cumulativeInventoryValue'
        ],
        'cumulativeQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cumulativeQuantity'
        ],
        'lookbackPeriod' => [
            'type' => 'Rankfoundry\eBaySDK\Account\Types\LookbackPeriod',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lookbackPeriod'
        ],
        'maxAvailableQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxAvailableQuantity'
        ],
        'maxInventoryValue' => [
            'type' => 'Rankfoundry\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxInventoryValue'
        ],
        'minAvailableQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minAvailableQuantity'
        ],
        'minInventoryValue' => [
            'type' => 'Rankfoundry\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minInventoryValue'
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