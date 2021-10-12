<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Fulfillment\Types;

/**
 *
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property \Rankfoundry\eBaySDK\Fulfillment\Enums\CountryCodeEnum $countryCode
 * @property string $county
 * @property string $postalCode
 * @property string $stateOrProvince
 */
class Address extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'addressLine1' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'addressLine1'
        ],
        'addressLine2' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'addressLine2'
        ],
        'city' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'city'
        ],
        'countryCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'countryCode'
        ],
        'county' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'county'
        ],
        'postalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'postalCode'
        ],
        'stateOrProvince' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'stateOrProvince'
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
