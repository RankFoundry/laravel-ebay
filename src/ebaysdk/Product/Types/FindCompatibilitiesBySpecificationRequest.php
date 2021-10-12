<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Product\Types;

/**
 *
 * @property string $categoryId
 * @property \Rankfoundry\eBaySDK\Product\Types\PropertyValue[] $compatibilityPropertyFilter
 * @property \Rankfoundry\eBaySDK\Product\Types\PropertyValue[] $specification
 * @property string[] $dataSet
 * @property string[] $datasetPropertyName
 * @property boolean $exactMatch
 * @property \Rankfoundry\eBaySDK\Product\Types\PaginationInput $paginationInput
 * @property \Rankfoundry\eBaySDK\Product\Types\CompatibilitySort[] $sortOrder
 */
class FindCompatibilitiesBySpecificationRequest extends \Rankfoundry\eBaySDK\Product\Types\BaseServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'categoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryId'
        ],
        'compatibilityPropertyFilter' => [
            'type' => 'Rankfoundry\eBaySDK\Product\Types\PropertyValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'compatibilityPropertyFilter'
        ],
        'specification' => [
            'type' => 'Rankfoundry\eBaySDK\Product\Types\PropertyValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'specification'
        ],
        'dataSet' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dataSet'
        ],
        'datasetPropertyName' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'datasetPropertyName'
        ],
        'exactMatch' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'exactMatch'
        ],
        'paginationInput' => [
            'type' => 'Rankfoundry\eBaySDK\Product\Types\PaginationInput',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paginationInput'
        ],
        'sortOrder' => [
            'type' => 'Rankfoundry\eBaySDK\Product\Types\CompatibilitySort',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'sortOrder'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'findCompatibilitiesBySpecificationRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
