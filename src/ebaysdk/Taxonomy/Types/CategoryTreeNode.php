<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Rankfoundry\eBaySDK\Taxonomy\Types;

/**
 *
 * @property \Rankfoundry\eBaySDK\Taxonomy\Types\Category $category
 * @property integer $categoryTreeNodeLevel
 * @property \Rankfoundry\eBaySDK\Taxonomy\Types\CategoryTreeNode[] $childCategoryTreeNodes
 * @property boolean $leafCategoryTreeNode
 * @property string $parentCategoryTreeNodeHref
 */
class CategoryTreeNode extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'category' => [
            'type' => 'Rankfoundry\eBaySDK\Taxonomy\Types\Category',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'category'
        ],
        'categoryTreeNodeLevel' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryTreeNodeLevel'
        ],
        'childCategoryTreeNodes' => [
            'type' => 'Rankfoundry\eBaySDK\Taxonomy\Types\CategoryTreeNode',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'childCategoryTreeNodes'
        ],
        'leafCategoryTreeNode' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'leafCategoryTreeNode'
        ],
        'parentCategoryTreeNodeHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'parentCategoryTreeNodeHref'
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
