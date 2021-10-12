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
 * @property string $buyer
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\Amount $claimAmount
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\DateTime $creationDate
 * @property integer $inquiryId
 * @property \Rankfoundry\eBaySDK\PostOrder\Enums\InquiryStatusEnum $inquiryStatusEnum
 * @property integer $itemId
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\DateTime $lastModifiedDate
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\DateTime $respondByDate
 * @property string $seller
 * @property integer $transactionId
 */
class InquirySummaryType extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyer' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyer'
        ],
        'claimAmount' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'claimAmount'
        ],
        'creationDate' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'inquiryId' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryId'
        ],
        'inquiryStatusEnum' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inquiryStatusEnum'
        ],
        'itemId' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'lastModifiedDate' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastModifiedDate'
        ],
        'respondByDate' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'respondByDate'
        ],
        'seller' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'seller'
        ],
        'transactionId' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionId'
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