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
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\AppealDetails $appealDetails
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\DateTime $creationDate
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\DateTime $escalationDate
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\DateTime $expirationDate
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\DateTime $lastBuyerRespDate
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\RefundAmounts $refundAmounts
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\DateTime $refundDeadlineDate
 * @property \Rankfoundry\eBaySDK\PostOrder\Types\Amount $totalAmount
 */
class InquiryDetails extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'appealDetails' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\AppealDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'appealDetails'
        ],
        'creationDate' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'escalationDate' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalationDate'
        ],
        'expirationDate' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expirationDate'
        ],
        'lastBuyerRespDate' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastBuyerRespDate'
        ],
        'refundAmounts' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\RefundAmounts',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundAmounts'
        ],
        'refundDeadlineDate' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundDeadlineDate'
        ],
        'totalAmount' => [
            'type' => 'Rankfoundry\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'totalAmount'
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
