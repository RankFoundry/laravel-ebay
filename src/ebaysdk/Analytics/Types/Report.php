<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Analytics\Types;

/**
 *
 * @property string $endDate
 * @property \Rankfoundry\eBaySDK\Analytics\Types\Header $header
 * @property string $lastUpdatedDate
 * @property \Rankfoundry\eBaySDK\Analytics\Types\Record[] $records
 * @property string $startDate
 * @property \Rankfoundry\eBaySDK\Analytics\Types\ErrorDetailV3[] $warnings
 */
class Report extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'endDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'endDate'
        ],
        'header' => [
            'type' => 'Rankfoundry\eBaySDK\Analytics\Types\Header',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'header'
        ],
        'lastUpdatedDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastUpdatedDate'
        ],
        'records' => [
            'type' => 'Rankfoundry\eBaySDK\Analytics\Types\Record',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'records'
        ],
        'startDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'startDate'
        ],
        'warnings' => [
            'type' => 'Rankfoundry\eBaySDK\Analytics\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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
