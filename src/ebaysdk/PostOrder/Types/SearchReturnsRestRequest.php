<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\PostOrder\Types;

/**
 *
 * @property string $creation_date_range_from
 * @property string $creation_date_range_to
 * @property string $item_id
 * @property string $limit
 * @property string $offset
 * @property string $return_state
 * @property string $sort
 * @property string $states
 * @property string $transaction_id
 */
class SearchReturnsRestRequest extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'creation_date_range_from' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creation_date_range_from'
        ],
        'creation_date_range_to' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creation_date_range_to'
        ],
        'item_id' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'item_id'
        ],
        'limit' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'limit'
        ],
        'offset' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offset'
        ],
        'return_state' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'return_state'
        ],
        'sort' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sort'
        ],
        'states' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'states'
        ],
        'transaction_id' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transaction_id'
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