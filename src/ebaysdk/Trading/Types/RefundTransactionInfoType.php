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
 * @property \Rankfoundry\eBaySDK\Trading\Enums\PaymentTransactionStatusCodeType $RefundStatus
 * @property \Rankfoundry\eBaySDK\Trading\Enums\RefundSourceTypeCodeType $RefundType
 * @property \Rankfoundry\eBaySDK\Trading\Types\UserIdentityType $RefundTo
 * @property \DateTime $RefundTime
 * @property \Rankfoundry\eBaySDK\Trading\Types\AmountType $RefundAmount
 * @property \Rankfoundry\eBaySDK\Trading\Types\TransactionReferenceType $ReferenceID
 * @property \Rankfoundry\eBaySDK\Trading\Types\AmountType $FeeOrCreditAmount
 */
class RefundTransactionInfoType extends \Rankfoundry\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'RefundStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ],
        'RefundType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundType'
        ],
        'RefundTo' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\UserIdentityType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundTo'
        ],
        'RefundTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundTime'
        ],
        'RefundAmount' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ],
        'ReferenceID' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\TransactionReferenceType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReferenceID'
        ],
        'FeeOrCreditAmount' => [
            'type' => 'Rankfoundry\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeeOrCreditAmount'
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
