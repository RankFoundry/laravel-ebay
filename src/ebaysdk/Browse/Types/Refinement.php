<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Browse\Types;

/**
 *
 * @property \Rankfoundry\eBaySDK\Browse\Types\AspectDistribution[] $aspectDistributions
 * @property \Rankfoundry\eBaySDK\Browse\Types\BuyingOptionDistribution[] $buyingOptionDistributions
 * @property \Rankfoundry\eBaySDK\Browse\Types\CategoryDistribution[] $categoryDistributions
 * @property \Rankfoundry\eBaySDK\Browse\Types\ConditionDistribution[] $conditionDistributions
 * @property string $dominantCategoryId
 */
class Refinement extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspectDistributions' => [
            'type' => 'Rankfoundry\eBaySDK\Browse\Types\AspectDistribution',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspectDistributions'
        ],
        'buyingOptionDistributions' => [
            'type' => 'Rankfoundry\eBaySDK\Browse\Types\BuyingOptionDistribution',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'buyingOptionDistributions'
        ],
        'categoryDistributions' => [
            'type' => 'Rankfoundry\eBaySDK\Browse\Types\CategoryDistribution',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryDistributions'
        ],
        'conditionDistributions' => [
            'type' => 'Rankfoundry\eBaySDK\Browse\Types\ConditionDistribution',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'conditionDistributions'
        ],
        'dominantCategoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dominantCategoryId'
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
